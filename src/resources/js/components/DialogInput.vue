<script setup>
import { ref, onMounted, watch } from "vue";
import Button from 'primevue/button';
import Dialog from 'primevue/dialog';
import { useForm } from "@inertiajs/vue3";
import MultiSelect from "./MultiSelect.vue";
import Badge from 'primevue/badge';

const props = defineProps({
   id: Number,
   dataPermissions: Array,
   name: String,
})

const formPermission = useForm({
    name: props.name,
    permissions: []
})

const dataPermissions = ref([]);
const fetchPermissions = async() => {
    try {
        const response = await fetch(`/role/add-role/${props.id}`);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        dataPermissions.value = await response.json();
    } catch (error) {
        console.error('Error fetching permissions:', error);
    }
}


const savePermission = () => {
    formPermission.put(route('add-role.update', props.id), {
        preserveScroll: true,
        onSuccess: () => {
            visible.value = false; // Close modal on success
        },
        onError: (errors) => {
            console.error("Form submission failed:", errors);
        }
    });
};

const visible = ref(false);

onMounted(() => {
    fetchPermissions();
})

watch(
    () => props.role,
    () => dataPermissions.role?.permissions
)
</script>

<template>
        <button @click="visible = true">
            <slot name="dialog-input"/>
        </button>
        <Dialog v-model:visible="visible" modal header="Edit Role" :style="{ width: '25rem' }">
            <form @submit.prevent="savePermission">
                <div class="flex items-center gap-4 mb-4">
                    <label for="username" class="font-semibold w-24">Permission</label>
                    <MultiSelect :permission="props.dataPermissions" v-model="formPermission.permissions" />
                </div>
                <div class="flex flex-wrap gap-2 mb-4">
                    <div v-for="item in dataPermissions.role?.permissions" :key="item.id" class="card flex flex-wrap justify-center items-end gap-2">
                        <Badge class="whitespace-nowrap" severity="success">{{item.name}}</Badge>
                    </div>
                </div>
                <div class="flex justify-end gap-2">
                    <Button type="button" label="Cancel" severity="secondary" @click="visible = false"></Button>
                    <Button type="submit" label="Save"></Button>
                </div>
            </form>
        </Dialog>
</template>