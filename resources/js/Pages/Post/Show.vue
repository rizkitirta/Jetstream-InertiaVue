<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Post show
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <ul>
                      <li>Name: {{ user.name }}</li>
                      <li>Email:  {{ user.email }}</li>
                      <li>Role: {{ user.role }}</li>
                      <li>created_at: {{ user.created_at }}</li>
                      <li>updated_at: {{ user.updated_at }}</li>
                  </ul>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: ['user'],
    }
</script>
