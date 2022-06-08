<div>
    <div class="p-5 bg-light-blue">
        <div class="flex justify-center items-start my-2">
          <div class="w-full my-1">
            <h1 class="text-xl font-semibold mb-12 text-4xl">FAQs</h1>
            <ul class="flex flex-col">
              <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(1)">
                <h2
                  @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                >
                  <span class="border-b-2 border-cyan-700 text-3xl">Can I get a product delivered to my door step?</span>
                  <i :class="handleRotate()" class='bx bx-down-arrow-circle bx-sm text-cyan-700 transform transition-transform duration-500'></i>
                </h2>
                <div
                  x-ref="tab"
                  :style="handleToggle()"
                  class="border-l-2 border-cyan-700 overflow-hidden max-h-0 duration-500 transition-all"
                >
                    <div class="flex flex-col my-3">
                        <div class="-m-3 overflow-x-auto sm:-mx-4 lg:-mx-6">
                            <div class="p-12 align-middle inline-block min-w-full sm:px-4 lg:px-6">
                                <div class="overflow-hidden px-8">
                                   <p class="text-semibold text-xl">
                                    Absolutely!! Our partnership with UPS enables us to deliver our premium quality items to your doorstep wherever you are
                                   </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
              </li>
    
    
              <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(2)">
                <h2
                  @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                >
                  <span class=" border-b-2 border-cyan-700 text-3xl">Can I pay with Bitcoin?</span>
                  <i :class="handleRotate()" class='bx bx-down-arrow-circle bx-sm text-cyan-700 transform transition-transform duration-500'></i>
                </h2>
                <div
                  x-ref="tab"
                  :style="handleToggle()"
                  class="border-l-2 border-cyan-700 overflow-hidden max-h-0 duration-500 transition-all"
                >
                <div class="flex flex-col my-3">
                    <div class="-m-3 overflow-x-auto sm:-mx-4 lg:-mx-6">
                        <div class="p-12 align-middle inline-block min-w-full sm:px-4 lg:px-6">
                            <div class="overflow-hidden px-8">
                               <p class="text-semibold text-xl">
                                We accept all form of Cryptocurrency payments through our partnership with Binance
                               </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              </li>
              <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(3)">
                <h2
                  @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                >
                  <span class=" border-b-2 border-cyan-700 text-3xl">Can I use the pay on delivery option?</span>
                  <i :class="handleRotate()" class='bx bx-down-arrow-circle bx-sm text-cyan-700 transform transition-transform duration-500'></i>
                </h2>
                <div
                  x-ref="tab"
                  :style="handleToggle()"
                  class="border-l-2 border-cyan-700 overflow-hidden max-h-0 duration-500 transition-all"
                >
                <div class="flex flex-col my-3">
                    <div class="-m-3 overflow-x-auto sm:-mx-4 lg:-mx-6">
                        <div class="p-12 align-middle inline-block min-w-full sm:px-4 lg:px-6">
                            <div class="overflow-hidden px-8">
                               <p class="text-semibold text-xl">
                                We can deliver products to you and receive payments only when you are satisfied with your order
                               </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    
        <div class="mt-4 mx-auto flex justify-between">
   
            <a class="bg-cyan-500 rounded-lg font-bold text-white text-center px-8 py-3 mx-auto transition duration-300 ease-in-out hover:bg-cyan-600 hover:scale-110 transition-all duration-300 ease-in-out" href="{{url('/products')}}"> Shop now</a>
        </div>
      </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 1
      });
      
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
  </script>
