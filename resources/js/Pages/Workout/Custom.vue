<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Add Custom Workout
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <form  class="mt-6" id="customWorkoutForm">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 m-4 ">
                    <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Plan</label>
                    <input v-model="workoutPlan" placeholder="Push Pull Legs" id="workoutName" type="text" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                     <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workouts Per Week</label>
                    <input v-model='workoutsPerWeek' id="workoutName" type="number" max="7" min="1" name="workoutName"
                     placeholder="4" class=" p-2 mt-2 text-gray-700 bg-gray-200 appearance-none
                      focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </div> 
                    <!-- <button @click="addWorkoutDaysNum" :disabled="workoutPlan.length===0" :class="{'cursor-not-allowed opacity-25': workoutPlan===''}" type="button" class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2  transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Save</button> -->
                
                </form> 
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mt-8">
                <div v-for="(workout,index) in workouts.slice(0, parseInt(workoutsPerWeek))">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 m-4 ">
                    <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Name</label>
                    <input v-model="workoutPlan" placeholder="Workout 1" id="workoutName" type="text" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                      <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Number of Excercises</label>
                    <input v-model='workoutsNumber' type="number" max="7" min="1" name="workoutName"
                     placeholder="4" class=" p-2 mt-2 text-gray-700 bg-gray-200 appearance-none
                      focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                      <hr>
                      <div >
                        <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Excercise Name</label>
                        <input placeholder="Workout 1" id="workoutName" type="text" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
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

        data(){
            return{
                isDisabled: true,
                workoutPlan:'',
                workoutsPerWeek:0,
                workouts:[
                    {id:1,numberOfExcercises:[
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},
                        {exerciseName:'', weight:0},

                    ],},
                    {id:2,numberOfExcercises:0,},
                    {id:3,numberOfExcercises:0,},
                    {id:4,numberOfExcercises:0,},
                    {id:5,numberOfExcercises:0,},
                    {id:6,numberOfExcercises:0,},

                ]
            }
        },
        methods: {
                addWorkoutDaysNum() {
                        var div = document.createElement("div");
                    div.innerHTML = `<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 m-4 ">
                    <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Plan</label>
                    <input v-model="workoutPlan" placeholder="Push Pull Legs" id="workoutName" type="text" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                     <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workouts Per Week</label>
                    <input v-model='workoutNumber' id="workoutName" type="number" max="7" min="1" name="workoutName"
                     placeholder="4" class=" p-2 mt-2 text-gray-700 bg-gray-200 appearance-none
                      focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </div> `;
                    document.getElementById("customWorkoutForm").appendChild(div);

            },

  }
    }
</script>
