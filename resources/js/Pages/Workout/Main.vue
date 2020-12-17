<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Workouts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <inertia-link href="/workouts/create">
                <button v-on:click="show = !show" type="button" class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    Custom Workout
                </button>
                </inertia-link>
                <inertia-link href="/selected">
                <button type="button" class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    Workouts
                </button>
                </inertia-link>

                <div class="container mt-8">
                    <h2 class="text-xl">All Workouts</h2>
                    <div class="mx-10 pt-15">
                        <div class="grid gap-6 mb-8 md:grid-cols-2">
                            <template v-for="workout in workouts">
                                <inertia-link :href="`workouts/${workout.id}/edit`">
                                    <div class="p-4 w-full transition duration-200 ease-in-out bg-white rounded-lg shadow-xs dark:bg-gray-200 hover:bg-gray-100">
                                        <img :src="'http://localhost:8000/storage/' + workout.img" alt="" class="w-full h-80 object-cover object-center">
                                         <h2 class="font-semibold text-gray-600 dark:text-gray-300 text-center text-xl mt-6"> {{workout.name}}</h2>
                                        <hr>
                                        <p class="text-sm">{{workout.user.name}}</p>
                                    </div>
                                </inertia-link>
                        </template>
                        </div>
                    </div>
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
        props:['workouts','success'],

        data(){
            return{
                show:true,
                url:window.location.href
            }
        }
    }
</script>
