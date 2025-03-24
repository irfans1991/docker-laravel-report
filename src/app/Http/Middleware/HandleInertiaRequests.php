<?php

namespace App\Http\Middleware;

use Inertia\Inertia;
use Inertia\Middleware;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            //
            // 'user.auth' => "Adamsan" ?? null,
            // 'app.name' => "E-report",

            // 'auth.user' => fn () => $request->user() ? new UserResource($request->user()) : null,

                'auth' => [
                    'user' => $request->user() ? new UserResource($request->user()) : null,
                    'roles' => $request->user() ? $request->user()->getRoleNames() : [],
                    'permissions' => $request->user() ? $request->user()->getAllPermissions()->pluck('name') : [],
                ],
            'ziggy' => function () use ($request) {
                return array_merge($request->all(), [
                    'location' => $request->url(),
                ]);
            },

            // 'auth.user' => fn () => $request->user() ? $request->user()->only('id', 'name', 'email') : null,
        ]);

        Inertia::share([
            'success' => fn() => $request->session()->get('success'),
        ]);
    }

    public function render($request, Throwable $exception)
{
    if ($exception instanceof HttpException && $exception->getStatusCode() === 403) {
        return Inertia::render('Errors/403')
            ->toResponse($request)
            ->setStatusCode(403);
    }

    return parent::render($request, $exception);
}
}
