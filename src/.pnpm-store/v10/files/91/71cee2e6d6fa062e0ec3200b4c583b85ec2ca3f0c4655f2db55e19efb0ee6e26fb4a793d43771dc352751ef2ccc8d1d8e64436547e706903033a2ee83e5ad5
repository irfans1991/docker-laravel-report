import { type OptionsType, type ValidationStatus } from './types';
import type { CommonAutoFill, InputSize } from './../FwbInput/types';
interface InputProps {
    modelValue?: string;
    label?: string;
    options?: OptionsType[];
    placeholder?: string;
    disabled?: boolean;
    required?: boolean;
    underline?: boolean;
    size?: InputSize;
    autocomplete?: CommonAutoFill;
    validationStatus?: ValidationStatus;
}
declare function __VLS_template(): {
    attrs: Partial<{}>;
    slots: {
        validationMessage?(_: {}): any;
        helper?(_: {}): any;
    };
    refs: {};
    rootEl: HTMLDivElement;
};
type __VLS_TemplateResult = ReturnType<typeof __VLS_template>;
declare const __VLS_component: import("vue").DefineComponent<InputProps, {}, {}, {}, {}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    "update:modelValue": (...args: any[]) => void;
}, string, import("vue").PublicProps, Readonly<InputProps> & Readonly<{
    "onUpdate:modelValue"?: ((...args: any[]) => any) | undefined;
}>, {
    label: string;
    size: InputSize;
    placeholder: string;
    disabled: boolean;
    required: boolean;
    modelValue: string;
    underline: boolean;
    autocomplete: CommonAutoFill;
    validationStatus: ValidationStatus;
    options: OptionsType[];
}, {}, {}, {}, string, import("vue").ComponentProvideOptions, false, {}, HTMLDivElement>;
declare const _default: __VLS_WithTemplateSlots<typeof __VLS_component, __VLS_TemplateResult["slots"]>;
export default _default;
type __VLS_WithTemplateSlots<T, S> = T & {
    new (): {
        $slots: S;
    };
};
