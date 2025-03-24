<script setup>
import Header from '../../Layouts/Header.vue';
import Content from '../../components/Content.vue';
import RadioButton from 'primevue/radiobutton';
import { ref, onMounted, onUnmounted } from 'vue';
import Button from 'primevue/button';
// import Editor from 'primevue/editor';
import Textarea from 'primevue/textarea';

const show = ref(true)

onMounted(() => {
show.value = false
})

onUnmounted(() => {
show.value = true
})

const ingredient = ref('');
</script>

<template>
    <Header/>
    <Head title="Feedback"/>
    <Transition name="slide-fade">
<div v-if="!show">
    <Content>
        <template #content-title>
            Feedback
        </template>
        <template #content-body>
                <a href="#" class="flex items-center justify-center p-2">
                    <img src="/resources/img/logo cwf-01.png" class="mr-3 h-10" alt="Flowbite Logo" />
                    <span class="self-center text-amber-500 text-xl font-semibold sm:text-2xl whitespace-nowrap">Chen Woo Fishery</span>
                </a>
                <div class=" w-1/2 mx-auto p-4 bg-orange-100">
                    <h1 class="text-center font-serif font-semibold">We value your feedback</h1>
                    <p class="text-center font-serif text-xs">Please complete the following form and help</p>
                    <p class="text-center font-serif text-xs">us improve our customer experince.</p>
                </div>
                <div class="flex flex-row justify-between text-[10pt] p-2 mt-4 w-2/3 mx-auto">
                    <h1>Very Statisfied</h1>
                    <h1>Satisfied</h1>
                    <h1>Neutral</h1>
                    <h1>Unsatisfied</h1>
                    <h1>Very Unsatisfied</h1>
                </div>
                <div class="flex flex-row text-[10pt] mt-4 w-4/5 mx-10 gap-2">
                    <h1 class="text-[11pt] w-1/6 ">How satisfied are you with our product ?</h1>
                    <div class="flex justify-between w-4/5">
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese1" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient2" name="pizza" value="Cheese2" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient3" name="pizza" value="Cheese3" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient4" name="pizza" value="Cheese4" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient5" name="pizza" value="Cheese5" />
                        </div>
                    </div>
                </div>
                <div class="flex flex-row text-[10pt] mt-4 w-4/5 mx-10 gap-2">
                    <h1 class="text-[11pt] w-1/6 ">How satisfied are you with our product ?</h1>
                    <div class="flex justify-between w-4/5">
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                    </div>
                </div>
                <div class="flex flex-row text-[10pt] mt-4 w-4/5 mx-10 gap-2">
                    <h1 class="text-[11pt] w-1/6 ">How satisfied are you with our product ?</h1>
                    <div class="flex justify-between w-4/5">
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 p-2 h-16 w-16">
                            <RadioButton v-model="ingredient" inputId="ingredient1" name="pizza" value="Cheese" />
                        </div>
                    </div>
                </div>
                <div class="p-4 mt-1 flex flex-col">
                    <h1 class="ml-12 font-serif">Comments :</h1>
                    <div class="w-2/3 mx-auto">
                        <!-- <Editor v-model="value" editorStyle="height: 320px" /> -->
                        <Textarea v-model="value" rows="5" cols="95" />
                    </div>
                    <div class="flex items-center justify-end mx-auto w-2/3">   
                        <Button label="submit" severity="success" />
                    </div>
                </div>
            </template>
        </Content>
    </div>
    </Transition>

</template>