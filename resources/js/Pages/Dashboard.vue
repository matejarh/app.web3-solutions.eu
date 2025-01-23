<script setup>
import Welcome from '@/Components/Welcome.vue';
import FullLayout from '@/Layouts/FullLayout.vue';
import { onMounted, ref } from 'vue';
import { toast } from 'vue3-toastify';
import ToastTemplate from '@/Components/ToastTemplate.vue'

onMounted(() => {

})

const pokažiToaste = () => {
    setTimeout(() => {
        toast.success(ToastTemplate)
    }, 1000);
    setTimeout(() => {
        toast.error('evo mene')
    }, 2000);
    setTimeout(() => {
        toast.warning('evo mene')
    }, 3000);
    setTimeout(() => {
        const lt = toast.loading('loading')

        setTimeout(() => {
            toast.remove(lt)
        }, 2000);
    }, 5000);
}
</script>

<template>

    <FullLayout title="Dashboard">
        <template #header>Dashboard</template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <button @click="pokažiToaste" class="dark:text-gray-100">Pokaži toaste</button>
                    <Welcome />
                </div>
                <div class="">

                </div>
            </div>
        </div>
    </FullLayout>
</template>
