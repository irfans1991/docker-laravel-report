
<script setup>
    import Header from '../../Layouts/Header.vue';
    import Content from '../../components/Content.vue';
    import { ref, onMounted, onUnmounted } from 'vue';
    import { Form } from '@primevue/forms';
    import TextInput from '../../components/TextInput.vue';// import { reactive } from 'vue';
    import { usePage, useForm } from '@inertiajs/vue3';
    import { computed } from "vue";
    import DatePicker from 'primevue/datepicker';
    import Select from 'primevue/select';
    import Button from 'primevue/button';
    import { useToast } from 'primevue/usetoast';
    import Toast from 'primevue/toast';
    import PasswordInput from '../../components/PasswordInput.vue';
    import FloatLabel from 'primevue/floatlabel';


    const toast = useToast();
    const page  = usePage(); // Get data from Laravel
    const roles = computed(() => page.props.roles ?? [])
    const successMsg = computed(() => page.props.flash?.success ?? null);

const formRegister = useForm({
    firstname: null,
    lastname: null,
    username: null,
    email: null,
    birthDate: null,
    gender: null,
    password: null,
    password_confirmation: null,
    role: null,
    dept: null
})


    const show = ref(true)

    onMounted(() => {
    show.value = false
    })

    onUnmounted(() => {
    show.value = true
    })

    const dept = ref([
        { name: 'IT', code: 'it' },
        { name: 'QC', code: 'qc' },
        { name: 'GA', code: 'ga' },
    ]);

    const genders = ref([
        { name: 'Male', code: 'm' },
        { name: 'Female', code: 'f' },
    ]);

const saveUser = () => {
    formRegister.post(route('users.store'),{
        onSuccess: (res) => {
            // formRegister.reset('password', 'password_confirmation')
            toast.add({severity:'success', summary: 'Create User Success !', detail:successMsg, life: 3000});
            formRegister.reset()
        },
        onError: (errors) => {
            console.log(errors); // Debugging: Check if errors return correctly
        }
    })
}

const clearInput = () => {
    formRegister.firstname = '';
    formRegister.lastname = '';
    formRegister.username = '';
    formRegister.email = '';
    formRegister.birthDate = null;
    formRegister.gender = null;
    formRegister.password = null;
    formRegister.password_confirmation = null;
    formRegister.role = null;
    formRegister.dept = null
}

</script>

<template>
    <Head title="Create-User"/>
    <Header/>

   <Toast />
    <Content>
        <template #content-title>
            Create User
        </template>
        <template #content-body>
            <Transition name="slide-fade">
                <div class="flex justify-center p-2" v-if="!show">
                    <Form  @submit="saveUser" class="flex flex-col gap-1 w-full sm:w-1/2" >
                        <span class="font-bold mb-2 block text-gray-500">Form User</span>
                        <div class="flex gap-2 mb-3">
                            <TextInput v-model="formRegister.firstname" type="text" name="Firstname" placeholderText="First Name" :message="formRegister.errors.firstname" class="w-full" />
                            <TextInput v-model="formRegister.lastname" type="text" name="Lastname" placeholderText="Last Name" :message="formRegister.errors.lastname" class="w-full" />
                        </div>
                        <div class="flex gap-2 mb-3">
                            <TextInput v-model="formRegister.username" type="text" name="username" placeholderText="Last Name" :message="formRegister.errors.username" class="w-full" />
                            <TextInput v-model="formRegister.email" type="text" name="email" placeholderText="Last Name" :message="formRegister.errors.email" class="w-full" />
                        </div>
                        <div class="flex gap-2 mb-3">
                            <FloatLabel variant="on">
                                <DatePicker v-model="formRegister.birthDate" dateFormat="dd/mm/yy" id="on_label" class="w-full"/>
                                <label for="on_label">Birth Date <span class="text-red-500">*</span></label>
                            </FloatLabel>
                            <Select v-model="formRegister.gender" :options="genders" optionLabel="name" optionValue="name" placeholder="Select Gender" fluid/>
                        </div>
                        <div class="flex gap-2 mb-3">
                             <PasswordInput v-model="formRegister.password" name="password" placeholder="Password" :message="formRegister.errors.password" class="w-full" />
                             <PasswordInput v-model="formRegister.password_confirmation" name="password confirmation" placeholder="Password" :message="formRegister.errors.password" class="w-full" />
                        </div>
                        <div class="flex gap-2 mb-3">
                            <Select v-model="formRegister.role" :options="roles" optionLabel="name" optionValue="name" placeholder="Select Role" class="w-full"/>
                            <Select v-model="formRegister.dept" :options="dept" optionLabel="name" optionValue="name" placeholder="Select Department" class="w-full" fluid/>
                        </div>
                        <div class="flex gap-2 mb-3">
                            <Button label="success" severity="success" type="submit"/>
                            <Button label="Clear" severity="clear" @click="clearInput"/>
                        </div>
                    </Form>
                </div>
            </Transition>
        </template>
    </Content>
    
</template>