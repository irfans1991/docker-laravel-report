<script setup>
import { ref } from 'vue'
import Dialog from 'primevue/dialog';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Password from 'primevue/password';
import { useForm } from '@inertiajs/vue3';
import { Form } from '@primevue/forms';
import { useToast } from "primevue/usetoast";
import Message from 'primevue/message';
const toast = useToast();



const isShowModal = ref(false)

const props = defineProps({
  id: Number,
  email: String
})

function closeModal () {
  isShowModal.value = false
}
function showModal () {
  isShowModal.value = true
}
const visible = ref(false);

const EditUser = useForm({
  email: props.email,
  password: '',
  password_confirmation: '',
})

const updateForm = () => {
  EditUser.put(route('users.update', props.id), {
        preserveScroll: true,
        onSuccess: () => {
          visible.value = false; // Close modal on success
          toast.add({severity:'success', summary: 'Update Users Success !', life: 3000});
          formRole.reset()
        },
        onError: (errors) => {
            console.error("Form submission failed:", errors);
        }
    });
}

</script>
<template>
    <div class="card flex justify-center">
        <button @click="visible = true">
          <slot name="icon-modals"/>
        </button>
        <Dialog v-model:visible="visible" modal header="Edit Users" :style="{ width: '25rem' }">
          <Form @submit="updateForm">
            <span class="text-surface-500 dark:text-surface-400 block mb-8">Update your Account.</span>
            <div class="flex items-center gap-4 mb-4">
              <label for="username" class="font-semibold w-24">Email </label>
              <InputText id="username" v-model="EditUser.email" class="flex-auto" autocomplete="off" disabled/>
              <Message size="small" severity="error" variant="simple">{{EditUser.errors.email}}</Message>
            </div>
            <div class="flex items-center gap-4">
              <label for="password" class="font-semibold w-24">Password <span class="text-red-500">*</span></label>
              <InputText id="password" type="password" class="flex-auto" autocomplete="off" v-model="EditUser.password" />
            </div>
            <div class="flex justify-center">
              <Message size="small" severity="error" variant="simple">{{EditUser.errors.password}}</Message>
            </div>
            <div class="flex items-center gap-4 mb-4">
              <label for="password_confirmation" class="font-semibold w-24">Password Confirmation <span class="text-red-500">*</span></label>
              <InputText id="password_confirmation" type="password" class="flex-auto" autocomplete="off" v-model="EditUser.password_confirmation"/>
            </div>
            <div class="flex justify-end gap-2">
              <Button type="button" label="Cancel" severity="secondary" @click="visible = false"></Button>
              <Button type="submit" label="Update"></Button>
            </div>
          </Form>
      </Dialog>
    </div>
</template>