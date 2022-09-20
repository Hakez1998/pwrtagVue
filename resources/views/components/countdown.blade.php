<div x-data="countdown" class="flex items-center justify-center w-full h-36">
    <div class="grid grid-flow-col gap-5 text-center auto-cols-max">
    <div x-show='open' class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
        <span class="countdown font-mono text-5xl md:text-7xl">
        <span id="daySpan" style="--value:00;"></span>
        </span>
        days
    </div> 
    <div x-show='open' class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
        <span class="countdown font-mono text-5xl md:text-7xl">
        <span id="hourSpan" style="--value:00;"></span>
        </span>
        hours
    </div> 
    <div x-show='open' class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
        <span class="countdown font-mono text-5xl md:text-7xl">
        <span id="minSpan" style="--value:00;"></span>
        </span>
        min
    </div> 
    <div x-show='open' class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
        <span class="countdown font-mono text-5xl md:text-7xl">
        <span id="secSpan" style="--value:00;"></span>
        </span>
        sec
    </div>
    <div x-show="!open" class="flex items-center justify-center">
        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content mx-2">
            <span class="countdown font-mono text-5xl md:text-7xl">
            <span style="--value:00;"></span>
            </span>
                E
        </div>
        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content mx-2">
            <span class="countdown font-mono text-5xl md:text-7xl">
            <span style="--value:00;"></span>
            </span>
                X
        </div>
        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content mx-2">
            <span class="countdown font-mono text-5xl md:text-7xl">
            <span style="--value:00;"></span>
            </span>
                P
        </div>
        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content mx-2">
            <span class="countdown font-mono text-5xl md:text-7xl">
            <span style="--value:00;"></span>
            </span>
                I
        </div>
        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content mx-2">
            <span class="countdown font-mono text-5xl md:text-7xl">
            <span style="--value:00;"></span>
            </span>
                R
        </div>
        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content mx-2">
            <span class="countdown font-mono text-5xl md:text-7xl">
            <span style="--value:00;"></span>
            </span>
                E
        </div>
        <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content mx-2">
            <span class="countdown font-mono text-5xl md:text-7xl">
            <span style="--value:00;"></span>
            </span>
                D
        </div>
    </div>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('countdown', () => ({
            open: true,            
            
            init() {
                let date = '{{$date}}';                
                var countDownDate = new Date(date).getTime();
                
                x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;

                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    document.getElementById("daySpan").style.cssText += '--value:'+days+';'
                    document.getElementById("hourSpan").style.cssText += '--value:'+hours+';'
                    document.getElementById("minSpan").style.cssText += '--value:'+minutes+';'
                    document.getElementById("secSpan").style.cssText += '--value:'+seconds+';'

                    if (distance < 0) {
                        clearInterval(x);
                        this.open = false;
                    }
                }, 1000)
            },

            toggle() {
                this.open = ! this.open
            }
        }))
    })
</script>