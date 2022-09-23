<div x-data="ticket" class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
    <div x-cloak @click="modelOpen = false" x-show="ticket" 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0" 
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"
    ></div>

    <div x-cloak x-show="ticket" 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-[#1a1c23] rounded-lg shadow-xl 2xl:max-w-4xl" 
    >
        <div class="flex items-center justify-between space-x-4">
                <x-logo02 />
            <button @click="ticket = false; status = null" class="text-gray-600 focus:outline-none hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        <div class="flex flex-col overflow-y-auto md:flex-row items-center">
          <div class="h-32 md:h-auto md:w-1/3 ">
            <div class="w-full flex justify-center ">
                <div class="w-2/3 border-b-2 md:border-b-0 border-white">
                    <h1 class="text-2xl font-medium text-gray-50 ">Already register? </h1>
                    <p class="mt-2 text-sm text-gray-400 ">
                        Check your ticket here
                    </p>
                </div>
            </div>
          </div>
          
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-2/3 md:border-l-2 border-white">
            <div x-show="status == null" class="w-full">
                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-600">Email</label>
                <div class="w-full relative">
                    <input x-model="email" placeholder="Email" type="email" class="block w-full px-3 py-2 mt-2 text-gray-00 placeholder-gray-400 bg-gray-700 border border-gray-500 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">                
                    <button @click="checkTicket" type="button" class="absolute top-0 right-0 bg-gray-800 hover:bg-gray-500 border-gray-500 border rounded-r-md p-2">
                        Submit
                    </button>
                </div>
            </div>  
            <div class="w-full" x-show="status == 'error'">
                <span class="text-white text-2xl">
                    Opps! Your ticket not found
                </span> 
            </div>          
          </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('ticket', () => ({
            open: false,
            email: '',
            status: null,

            async checkTicket() {
                this.newpost = await (await fetch('/ticket', {
                    method: 'POST',
                    body: JSON.stringify({
                        email: this.email,
                    }),
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                    },
                })).json();

                if(this.newpost == 400) {
                    this.status = 'error';
                }
                else {
                    window.location.href = this.newpost;
                }
                    
            },

        }))
    })
</script>