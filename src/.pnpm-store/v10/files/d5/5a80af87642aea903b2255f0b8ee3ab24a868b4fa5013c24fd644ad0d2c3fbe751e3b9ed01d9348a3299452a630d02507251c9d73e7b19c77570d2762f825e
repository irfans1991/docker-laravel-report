import type { ModalPosition, ModalSize } from './types';
interface ModalProps {
    notEscapable?: boolean;
    persistent?: boolean;
    size?: ModalSize;
    position?: ModalPosition;
}
declare function __VLS_template(): {
    attrs: Partial<{}>;
    slots: {
        header?(_: {}): any;
        'close-icon'?(_: {}): any;
        body?(_: {}): any;
        footer?(_: {}): any;
    };
    refs: {
        modalRef: HTMLDivElement;
    };
    rootEl: HTMLDivElement;
};
type __VLS_TemplateResult = ReturnType<typeof __VLS_template>;
declare const __VLS_component: import("vue").DefineComponent<ModalProps, {}, {}, {}, {}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    close: (...args: any[]) => void;
    "click:outside": (...args: any[]) => void;
}, string, import("vue").PublicProps, Readonly<ModalProps> & Readonly<{
    onClose?: ((...args: any[]) => any) | undefined;
    "onClick:outside"?: ((...args: any[]) => any) | undefined;
}>, {
    persistent: boolean;
    size: ModalSize;
    notEscapable: boolean;
    position: ModalPosition;
}, {}, {}, {}, string, import("vue").ComponentProvideOptions, false, {
    modalRef: HTMLDivElement;
}, HTMLDivElement>;
declare const _default: __VLS_WithTemplateSlots<typeof __VLS_component, __VLS_TemplateResult["slots"]>;
export default _default;
type __VLS_WithTemplateSlots<T, S> = T & {
    new (): {
        $slots: S;
    };
};
