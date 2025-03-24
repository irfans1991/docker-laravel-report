<script setup>
import Dashboard from '../components/dashboard/Dashboard.vue'
import Header from '../Layouts/Header.vue'
// defineOptions({
//     // layout: demo,
//     // layout: header
// })
</script>

<template>
    <Head title="Home"/>
    <Header/>
    <Dashboard/>


    <!-- <div class="w-full h-full flex">
        <Sidebar>
            <template #sidebar-home>
                <h1 class="text-white font-bold text-center">Sidebar</h1>
            </template>
        </Sidebar>
        <div class="w-full h-full">
            <Header></Header>
            <div class="w-full h-[calc(100vh-50px)]">
                <div class="w-full h-full text-center">
                    <h1>Hello , {{$page.props.auth.user.name}} </h1>
                    <h1>{{ $page.component }}</h1>
                </div>
            </div>
        </div>
    </div> -->
    
        
</template>

<!-- <Head title="Home" />
    <Head >
        <meta name="description" content="My Home"/>
    </Head> -->