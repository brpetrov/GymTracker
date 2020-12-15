<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Workout Plan
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
                        <form v-if="show" class="mt-6">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 m-4 ">
                    <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Plan</label>
                    <input id="workoutName" type="text" name="workoutName" placeholder="Push Pull Legs" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </div> 
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 m-4 ">
                    <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Day</label>
                    <input id="workoutName" type="text" name="workoutName" placeholder="Workout A / Day 1" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </div> 
                    <button type="button" class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    Choose Workout
                    </button>

                </form>
                
                
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

        data(){
            return{
                show:true
            }
        }
    }
</script>
