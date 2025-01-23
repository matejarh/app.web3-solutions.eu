<script setup>
import FullLayout from '@/Layouts/FullLayout.vue';
import TokenList from '@/Components/TokenList.vue';

</script>

<template>
    <FullLayout title="Arbitrage finder">
        <template #header>Arbitrage finder</template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">


                </div>
                <div class="">
                    <TokenList />
                </div>
            </div>
        </div>
    </FullLayout>
</template>
