<div x-data="register" class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
    <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0" 
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"
    ></div>

    <div x-cloak x-show="modelOpen" 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl" 
        :class="{ 'bg-green-300': status=='success' , 'bg-red-300' : status=='fail' }"
    >
        <div class="flex items-center justify-between space-x-4">
            <h1 x-show="status==null" class="text-xl font-medium text-gray-800 ">{{ $formTitle }}</h1>
            <div x-show="status=='success'" class="flex text-lg text-green-700">
                <svg class="w-6 h-6 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                    <span class="font-medium">Success!</span> Registration submitted.
                </div>
            </div>
            <div x-show="status=='fail'" class="flex text-lg text-red-700">
                <svg class="w-6 h-6 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                    <span class="font-medium">Error!</span> Please try again later.
                </div>
            </div>
            <div x-show="status=='exceed'" class="flex text-lg text-red-700">
                <svg class="w-6 h-6 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                    <span class="font-medium">Sorry!</span> You have exceed limit of participants.
                </div>
            </div>

            <button @click="modelOpen = false; status = null" class="text-gray-600 focus:outline-none hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>

        <p x-show="status==null" class="mt-2 text-sm text-gray-500 ">
            {{ $formSubtitle }}
        </p>

        <form x-show="status==null" class="mt-5">
            <div>
                <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-600">Name</label>
                <input x-model="name" placeholder="Arthur Melo" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>

            <div class="mt-4">
                <label for="gym name" class="block text-sm text-gray-700 capitalize dark:text-gray-600">Gym name</label>
                <input x-model="gymName" placeholder="Arthur " type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>

            <div class="mt-4">
                <label for="ic" class="block text-sm text-gray-700 capitalize dark:text-gray-600">IC</label>
                <input 
                    x-model="ic" 
                    placeholder="IC number" 
                    type="text" 
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" 
                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                    :class="{ 'focus:border-red-300 focus:ring-red-300' : !validateIc(ic), 'focus:border-green-300 focus:ring-green-300' : validateIc(ic)}"
                >                
            </div>

            <div class="mt-4">
                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-600">Email</label>
                <input x-model="email" placeholder="arthurmelo@example.app" type="email" 
                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                :class="{ 'focus:border-red-300 focus:ring-red-300' : !validateEmail(email), 'focus:border-green-300 focus:ring-green-300' : validateEmail(email)}">
            </div>

            <div class="mt-4">
                <label for="gender" class="block text-sm text-gray-700 capitalize dark:text-gray-600 mb-2">Gender</label>
                <!-- <button 
                    @click="updateGender('male')"
                    class="px-3 py-2 text-sm tracking-wide text-indigo-600 capitalize transition-colors duration-200 transform bg-white rounded-md border-2 border-indigo-600 hover:font-bold"
                    :class="{ 'bg-indigo-600 text-white': gender=='male' }"
                >Male</button> -->
                <!-- <button 
                    @click="updateGender('female')"
                    class="px-3 py-2 text-sm tracking-wide text-indigo-600 capitalize transition-colors duration-200 transform bg-white rounded-md border-2 border-indigo-600 hover:font-bold"
                    :class="{ 'bg-indigo-600 text-white': gender=='female' }"
                >Female</button> -->
                <select x-model="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5  ">
                    <option selected>Choose your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>                    
                </select>
            </div>
            
            <div class="mt-4">
                <label for="weight" class="block text-sm text-gray-700 capitalize dark:text-gray-600">Weight</label>
                <input x-model="weight" placeholder="in Kg" type="number" class="block md:w-2/5 w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <label for="age" class="block text-sm text-gray-700 capitalize dark:text-gray-600">Age</label>
                <input x-model="age" placeholder="age" type="number" class="block md:w-2/5 w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            </div>
            
            <div class="flex justify-end mt-6">
                <button @click="createPost" type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('register', () => ({
            open: false,
            name: '',
            gymName: '',
            ic:'',
            email: '',
            status: null,
            gender:null,
            weight: 0,
            age: 0,
 
            async createPost() {
                this.newpost = await (await fetch('/register', {
                    method: 'POST',
                    body: JSON.stringify({
                        name: this.name,
                        gymName: this.gymName,
                        ic: this.ic,
                        email: this.email,
                        gender: this.gender,
                        weight: this.weight,
                        age: this.age,
                    }),
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                    },
                })).json();

                if(this.newpost == 202) {
                    this.status = 'success';
                }
                else if(this.newpost == 406) {
                    this.status = 'exceed';
                }
                else {
                    this.status = 'fail';
                }
                    
            },

            validateIc(ic) {
                if((ic.length > 1 && ic.length < 12) || ic.length > 12 )
                    return false ;
                else return true;
            },

            validateEmail(email) {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            },

            updateGender(gender) {
                if(this.gender == null || this.gender != gender) {
                    this.gender = gender;                    
                }
                else if(this.gender == gender){
                    this.gender = null;
                }
            }
        }))
    })
</script>