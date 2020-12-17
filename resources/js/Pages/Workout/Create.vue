<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Create Custom Workout
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <form  @submit.prevent="createWorkout" action="/workouts" method="POST" class="mt-6" id="customWorkoutForm" enctype="multipart/form-data">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 m-4 ">
                    <label for="workoutName" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Plan</label>
                    <input v-model="form.name"  placeholder="Push Pull Legs" id="workouName" type="text" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"  />
                    <p class="text-sm text-red-600 m-2">{{errors.name}}</p>
                    <label for="workoutPurpose" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Purpose</label>
                    <input v-model="form.purpose"  placeholder="bulk up" id="workoutPurpose" type="text" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"  />
                    <p class="text-sm text-red-600 m-2">{{errors.purpose}}</p>
                    <label for="workoutImg" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Thumbnail</label>
                    <input @change="imgSelected" placeholder="bulk up" id="img" type="file" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"/>              
                    <p class="text-sm text-red-600 m-2">{{errors.img}}</p>
                    </div> 
                    <div class="text-center">
                        <button
                            type="submit"
                            class="inline-flex text-md items-center px-6 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Create
                        </button>
                    </div>
                </form>

                <div class="container mt-16">
                    <h2 class="text-center">Preview</h2>
                    <div class="mx-10 pt-4">
                        <div class="w-1/3 mx-auto">
                                    <img class="w-full overflow-hidden h-32 object-cover" :src="imgPreview" alt="">
                                    <div class="p-4 transition duration-200 ease-in-out h-full bg-white rounded-lg shadow-xs dark:bg-gray-200 hover:bg-gray-100">
                                        <h2 class="font-semibold text-gray-600 dark:text-gray-300 text-center text-xl"> {{form.name}}</h2>
                                        <hr>
                                        <h3>{{form.purpose}}</h3>
                                        <p>{{user.name}}</p>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- <div class="grid grid-cols-3 gap-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 m-4 ">
                <label for="workout" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Workout Day</label>
                <input  placeholder="Day 1" id="workoutName" type="text" name="workoutName" class="block w-full p-2 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                 <div class="grid gap-2 grid-cols-10">
                     <div class="col-span-6">
                        <label for="excercise" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Excercise</label>
                        <input placeholder="Bench Press" id="workoutName" type="text" name="workoutName" class="block w-full p-2 mt-2 mx-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                     </div>
                     <div class="col-span-2">
                        <label for="weight" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Weight</label>
                        <input placeholder="40" id="workoutName" type="number" name="workoutName" class="block w-full p-2 mt-2 mx-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                     </div>
                     <div class="text-center">
                        <button class="p-2 mt-9 text-center text-white transition bg-red-500 rounded-full shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </div>
                    <div class="text-center">
                        <button class="p-2 mt-9 text-center text-white transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </div>
                    
                 </div>
               
            </div> 
            
            
        </div> -->
    
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
        props:['user','errors'],

        data(){
            return{
                form:{
                    name:'',
                    purpose:'',
                    img:null,
                },
                imgPreview:null
            }
        },
        methods: {
            createWorkout(){
                var data = new FormData()
                data.append('name', this.form.name)
                data.append('purpose',this.form.purpose)
                data.append('img',this.form.img)
                this.$inertia.post('/workouts',data,{
                    onSuccess:()=>{

                    }
                })
            },
            imgSelected(e){
                this.form.img= e.target.files[0];
                let reader= new FileReader();
                reader.onload=e=>{
                    this.imgPreview=e.target.result;
                    console.log(this.form.img.name);
                }
                reader.readAsDataURL(this.form.img)
            }
        }
    }
</script>
