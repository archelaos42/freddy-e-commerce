<template>
    <AppLayout>
    <div class="flex justify-center bg-gradient-to-b from-gray-200 pt-2">
        <a href="/login" class="text-sm mt-1 mr-2"><span class="underline">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="12" height="12"
                     viewBox="0 0 50 50">
                    <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                </svg>
            </span></a>
    </div>
    <div class="text-center mt-16">
        <h1 class="font-bold font-ropa text-tra text-base text-3xl text-transform: uppercase">{{ collection.name }}</h1>

    </div>

    <div class="flex justify-center mx-64">

        <div class="w-1/6 mr-6 mt-12">
            <div class="flex">
                <div>
                    <h1 class="font-bold font-ropa text-transform: uppercase text-tra text-base">Filters</h1>
                    <div class="relative bottom-3">________</div>
                </div>
                <Link class="flex my-auto text-sm py-1 px-2" v-bind:href="'/collection/' + collection.id">
                    <button class="flex my-auto font-ropa text-sm py-1 px-2 mb-3 text-white bg-black">
                        <svg class="fill-white my-auto mr-1" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" width="12" height="12" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero"/></svg>
                        <h1>Clear</h1>
                    </button>
                </Link>

            </div>

            <div class="relative pt-1">
                <div class="flex justify-between">
                    <h1 class="text-transform: uppercase font-bold font-ropa text-tra text-base">Price</h1>
                    <svg class="mt-1" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
                </div>
                <div class="pt-4">

                    <div class="custom-slider">
                        <input
                            v-model="vMin"
                            type="range"
                            min="1"
                            max="500"
                            class="slider"
                        />
                    </div>
                    <div class="custom-slider">
                        <input
                            v-model="vMax"
                            type="range"
                            min="100"
                            max="500"
                            class="slider"
                        />
                        <div class="flex">
                            <input v-model="vMin" type="number" class="input, w-20 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                            <div class="flex text-center">Price in Euros</div>
                            <input v-model="vMax" type="number" class="input, w-20"  />
                        </div>
                    </div>

                </div>
            </div>
            <div class="border-t-2 border-solid border-gray-300">
                <div class="flex justify-between mt-3">
                    <h1 class="font-bold font-ropa text-tra text-transform: uppercase text-base">Size</h1>
                    <svg class="mt-1" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
                </div>
                <div>
                    <div class="flex items-center mb-4">
                        <input v-model="sizeXxs" id="xxs" type="checkbox" value="xxs" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="xxs" class="ml-2 text-sm font-medium text-gray-900 ">XXS</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input v-model="sizeXs"  id="xs" type="checkbox" value="xs" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="xs" class="ml-2 text-sm font-medium text-gray-900 ">XS</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input v-model="sizeS" id="s" type="checkbox" value="s" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="s" class="ml-2 text-sm font-medium text-black">S</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input v-model="sizeM" id="m" type="checkbox" value="m" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="m" class="ml-2 text-sm font-medium text-gray-900 ">M</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input v-model="sizeL" id="l" type="checkbox" value="l" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="l" class="ml-2 text-sm font-medium text-gray-900 ">L</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input v-model="sizeXl" id="xl" type="checkbox" value="xl" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="xl" class="ml-2 text-sm font-medium text-gray-900 ">XL</label>
                    </div>
                </div>
            </div>

            <div class="flex justify-between mt-3">
                <h1 class="font-bold font-ropa text-tra text-transform: uppercase text-base">Waist</h1>
                <svg class="mt-1" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
            </div>
            <div>
                <div class="flex items-center mb-4">
                    <input v-model="waistM" id="medium" type="checkbox" value="medium" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="medium" class="ml-2 text-sm font-medium text-gray-900 ">Medium</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="waistH"  id="High" type="checkbox" value="high" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="high" class="ml-2 text-sm font-medium text-gray-900 ">High</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="waistHi" id="Higher" type="checkbox" value="higher" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="higher" class="ml-2 text-sm font-medium text-black">Higher</label>
                </div>
            </div>

            <div class="flex justify-between mt-3">
                <h1 class="font-bold font-ropa text-tra text-transform: uppercase text-base">Length</h1>
                <svg class="mt-1" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
            </div>
            <div>
                <div class="flex items-center mb-4">
                    <input v-model="length34" id="3/4" type="checkbox" value="3/4" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="3/4" class="ml-2 text-sm font-medium text-gray-900 ">3/4</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="length78"  id="7/8" type="checkbox" value="7/8" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="7/8" class="ml-2 text-sm font-medium text-gray-900 ">7/8</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="lengthBl" id="bicycle length" type="checkbox" value="bicycle length" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bicycle length" class="ml-2 text-sm font-medium text-black">Bicycle length</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="lengthS" id="short" type="checkbox" value="short" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="short" class="ml-2 text-sm font-medium text-black">Short</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="lengthN" id="normal" type="checkbox" value="normal" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="normal" class="ml-2 text-sm font-medium text-black">Normal</label>
                </div>
            </div>

            <div class="flex justify-between mt-3">
                <h1 class="font-bold font-ropa text-tra text-transform: uppercase text-base">Color</h1>
                <svg class="mt-1" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
            </div>
            <div>
                <div class="flex items-center mb-4">
                    <input v-model="blue" id="blue" type="checkbox" value="blue" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="blue" class="ml-2 text-sm font-medium text-gray-900 ">Blue</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="beige"  id="beige" type="checkbox" value="beige" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="beige" class="ml-2 text-sm font-medium text-gray-900 ">Beige</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="grey" id="grey" type="checkbox" value="grey" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="grey" class="ml-2 text-sm font-medium text-black">Grey</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="military" id="military" type="checkbox" value="military" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="military" class="ml-2 text-sm font-medium text-black">Military</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="pink" id="pink" type="checkbox" value="pink" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="pink" class="ml-2 text-sm font-medium text-black">Pink</label>
                </div>
                <div class="flex items-center mb-4">
                    <input v-model="black" id="black" type="checkbox" value="black" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="black" class="ml-2 text-sm font-medium text-black">Black</label>
                </div>
            </div>

        </div>




        <div class="w-4/5">


<!--                <div class="h-78" v-for="category in categories">-->
<!--                    <a href="/" class="">-->
<!--                        <img src="https://freddy.hr/image/cache/catalog/bannerji/k-klasik-500x500.jpg" alt="">-->
<!--                            {{ category.name }}-->
<!--                    </a>-->
<!--                </div>-->

                <div class="mt-16">
<!--                    {{ selectedView }}{{ products.data.length }}-->
                    <div class="flex border-b border-t border-gray-100 border-solid py-3 mb-3 flex justify-between">
                        <div class="pt-2">
                            <button @click="$page.props.selectedView = 'multi'" class="mr-3">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M6 6h-6v-6h6v6zm9-6h-6v6h6v-6zm9 0h-6v6h6v-6zm-18 9h-6v6h6v-6zm9 0h-6v6h6v-6zm9 0h-6v6h6v-6zm-18 9h-6v6h6v-6zm9 0h-6v6h6v-6zm9 0h-6v6h6v-6z"/>
                                </svg>
                            </button>
                            <button @click="$page.props.selectedView = 'single'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M24 3h-16v-2h16v2zm0 3h-16v2h16v-2zm0 5h-16v2h16v-2zm0 5h-16v2h16v-2zm0 5h-16v2h16v-2zm-18-20h-6v6h6v-6zm0 8h-6v6h6v-6zm0 8h-6v6h6v-6z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex">
<!--                            <label class="mr-3 text-sm my-auto" for="cars">Sort by:</label>-->
<!--                            <select class="h-8 w-36 p-0 text-sm" id="cars" name="cars">-->
<!--                                <option value="volvo">Choice</option>-->
<!--                                <option value="saab">Name</option>-->
<!--                                <option value="fiat">Review</option>-->
<!--                                <option value="audi">Model</option>-->
<!--                            </select>-->
                        </div>
                    </div>
                </div>
                 <div class="flex grid grid-cols-4" v-if="!$page.props.products.data.length">
                     <p>No products matching your parameters were found</p>
                 </div>
                 <div class="flex flex-wrap" v-if="$page.props.selectedView === 'multi'">
                    <div class="w-1/4" v-for="product in products.data">
    <!--                    <div v-if="!products.data.length">No product were found within the set parameters</div>-->
                        <div class="mr-6 font-ropa text-base text-left text-gray-500 border-solid">
                            <Link v-bind:href="'/product/' + product.id">
                                <img src="https://freddy.hr/image/cache/catalog/izdelki/BRITNEYF301_Z106X-/BRITNEYF301_Z106X_2-400x600w.jpg" alt="">
                            </Link>
                            <div class="bg-gray-200 text-center text-transform: uppercase text-sm  bg-green-400 bg-[#97C19B] font-ropa text-white py-0.5">Eco Friendly</div>
                            <div class="text-black bg-gray-200 text-center font-ibm text-sm mb-3 py-1">Code:WRUP4RC001ORG_Z64</div>
                            <h1>{{ product.name }}</h1>
                            <div class="text-black text-xl mt-2 border-t border-solid">{{ product.price }}&nbsp;€ </div>
                            <div v-if="$page.props.flash.message" class="text-blue-600 mb-4">
                                {{ $page.props.flash.message }}
                            </div>
                        </div>
    <!--                    <div class="mr-6 font-ropa text-base text-left text-gray-500 border-solid" v-if="$page.props.selectedView = 'multi'" >-->
    <!--                        <Link v-bind:href="'/product/' + product.id">-->
    <!--                            <img src="https://freddy.hr/image/cache/catalog/izdelki/BRITNEYF301_Z106X-/BRITNEYF301_Z106X_2-400x600w.jpg" alt="">-->
    <!--                        </Link>-->
    <!--                        <div class="bg-gray-200 text-center text-transform: uppercase text-sm  bg-green-400 bg-[#97C19B] font-ropa text-white py-0.5">Eco Friendly</div>-->
    <!--                        <div class="text-black bg-gray-200 text-center font-ibm text-sm mb-3 py-1">Code:WRUPs4RC001ORG_Z64</div>-->
    <!--                        <h1>{{ product.name }}</h1>-->
    <!--                        <div class="text-black text-xl mt-2 border-t border-solid">{{ product.price }}&nbsp;€ </div>-->
    <!--                    </div>-->
    <!--                    <div class="mr-6 font-ropa text-base text-left text-gray-500" >-->
    <!--                        <a href="/">-->
    <!--                            <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP1RC002ORG_J4B/wrup1rc002org_j4b_&#45;&#45;400x600w.jpg" alt="">-->
    <!--                        </a>-->
    <!--                        <div class="bg-gray-200 text-center text-transform: uppercase text-sm w-4/5 bg-green-400 bg-[#97C19B] font-ropa text-white py-0.5">Eco Friendly</div>-->
    <!--                        <div class="text-black bg-gray-200 text-center font-ibm text-sm mb-3 py-1">Code:WRUP4RC001ORG_Z64</div>-->
    <!--                        <h1>WR.UP®, NORMALAN STRUK, SKINNY, DENIM EFEKT, SVIJETLO ISPRANE</h1>-->
    <!--                        <div class="text-black text-xl mt-2 border-t border-solid">119,21 €</div>-->
    <!--                    </div>-->
    <!--                    <div class="mr-6 font-ropa text-base text-left text-gray-500" >-->
    <!--                        <a href="/">-->
    <!--                            <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUPSNUG2RS239_J79Y/wrupsnug2rs239_j79y_-_02-400x600w.jpg" alt="">-->
    <!--                        </a>-->
    <!--                        <div class="bg-gray-200 text-center text-transform: uppercase text-sm w-4/5 bg-green-400 bg-[#97C19B] font-ropa text-white py-0.5">Eco Friendly</div>-->
    <!--                        <div class="text-black bg-gray-200 text-center font-ibm text-sm mb-3 py-1">Code:WRUP4RC001ORG_Z64</div>-->
    <!--                        <h1>WR.UP® SUPERSKINNY SVIJETLE TRAPERICE OD EKO TRAPERA</h1>-->
    <!--                        <div class="text-black text-xl mt-2 border-t border-solid">45,59 €</div>-->
    <!--                    </div>-->
    <!--                    <div class="mr-6 font-ropa text-base text-left text-gray-500" >-->
    <!--                        <a href="/">-->
    <!--                            <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP1HS259/F2ReI6lU-400x600w.jpeg" alt="">-->
    <!--                        </a>-->
    <!--                        <div class="bg-gray-200 text-center text-transform: uppercase text-sm w-4/5 bg-green-400 bg-[#97C19B] font-ropa text-white py-0.5">Eco Friendly</div>-->
    <!--                        <div class="text-black bg-gray-200 text-center font-ibm text-sm mb-3 py-1">Code:WRUP4RC001ORG_Z64</div>-->
    <!--                        <h1>WR.UP® CRN TRAPERAC S RAZVEZIVOM CRNOM TRAKOM U POJASU</h1>-->
    <!--                        <div class="text-black text-xl mt-2 border-t border-solid">91,88 €</div>-->
    <!--                    </div>-->
    <!--                        <div class="mr-6 font-ropa text-base text-left text-gray-500" v-for="product in products.data" >-->
    <!--                            <div> {{ product.id }} </div>-->
    <!--                        </div>-->
                    </div>
                 </div>
            <div v-if="$page.props.selectedView === 'single'">
                <div class="flex grid grid-cols-1 mt-5" v-for="product in products.data">
                    <div  class="mr-6 font-ropa text-base text-left text-gray-500 border-solid flex">
                        <div class="pr-4">
                            <Link v-bind:href="'/product/' + product.id">
                                <img src="https://freddy.hr/image/cache/catalog/izdelki/BRITNEYF301_Z106X-/BRITNEYF301_Z106X_2-400x600w.jpg" alt="">
                            </Link>
                        </div>
                        <div>
                            <div class="text-black text-center text-md mb-3 py-1">Code:WRUPs4RC001ORG_Z64</div>
                            <h1 class="font-medium text-black text-2xl">{{ product.name }}</h1>
                            <div>{{ product.description }}</div>
                            <div class="text-black text-3xl mt-2 mb-2">{{ product.price }}&nbsp;€ </div>
                            <button class="flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2  mt-3 pl-2 mr-3 w-40">

                                <div class="px-3 pb-1 h-8 w-16">
                                    <svg width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" fill="currentColor" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z" fill-rule="nonzero"/>
                                    </svg>
                                </div>

                                <!--                                <h1>Add to Cart</h1>-->
                                <Link
                                    :href="('/cart.store')"
                                    method="post"
                                    :data="{
                                            id: product.id,
                                            name: product.name,
                                            qty: 1,
                                            price: product.price,
                                            size: selectedSize,
                                            // _token: this.$page.props.csrf_token,
                                            }"
                                    classes="px-3 py-2 mr-2 rounded text-white text-sm font-bold whitespace-no-wrap bg-blue-600 hover:bg-blue-800"
                                    as="button"
                                >Add to Cart</Link>

                            </button>
                            <div class="bg-gray-200 text-center text-transform: uppercase text-sm  bg-green-400 bg-[#97C19B] font-ropa text-white mt-3 py-0.5">Eco Friendly</div>

                            <div v-if="$page.props.flash.message" class="text-blue-600 mb-4">
                                {{ $page.props.flash.message }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>





    </AppLayout>
</template>

<script setup>
import {onMounted, ref, watch} from "vue";
import {Inertia} from "@inertiajs/inertia";
import { Link, useForm } from '@inertiajs/inertia-vue3';
import AppLayout from "../Layouts/AppLayout.vue";


let props = defineProps({
    products: Object,
    collection: Object,
    categories: Object,
    filters: Object,
    selectedView: String,
    // selectedView: String,
    // sliderValue: ref(50),

    // vMin:{
    //     Number,
    //     methods: {
    //         minChange(e) {
    //             if (e > vMax){
    //                 e = vMax
    //             }
    //         },},
    // vMax: {
    //     Number,
    //     methods:{
    //         maxChange(e) {
    //             if (e < vMin){
    //                 e = vMin
    //             }
    //         }
    //     }
    // },
    // }

    // sMin:ref(vMin),
    // sMax:ref(vMax),
});


onMounted(() => {
    // for each (products as product){
    //     if(!product.collection_id === collection.id){
    //         Vue.delete(products, 'product.id');
    //     }
    // }
    // if (vMin.value > vMax.value){
    //     vMin.value = vMax.value
    // }
    // if (vMax.value < vMin.value){
    //     vMax.value = vMin.value
    // }
    // if(props.selectedView === undefined){
    //     props.selectedView = 'zglj';
    // }
    // console.log(props.selectedView)
    if(col.value === undefined){
        col.value = props.collection.id;
        console.log(col.value)
        console.log(props.collection.id)
    }
    if(vMin.value === undefined){
        vMin.value = 1;
        vMax.value = 500;
    }
// }



})

let vMin = ref(props.filters.vMin);
let vMax = ref(props.filters.vMax);
let blue = ref(props.filters.blue);
let beige = ref(props.filters.beige);
let grey = ref(props.filters.grey);
let military = ref(props.filters.military);
let pink = ref(props.filters.pink);
let black = ref(props.filters.black);
let length34 = ref(props.filters.length34);
let length78 = ref(props.filters.length78);
let lengthBl = ref(props.filters.lengthBl);
let lengthS = ref(props.filters.lengthS);
let lengthN = ref(props.filters.lengthN);
let sizeXxs = ref(props.filters.sizeXxs);
let sizeXs = ref(props.filters.sizeXs);
let sizeS = ref(props.filters.sizeS);
let sizeM = ref(props.filters.sizeM);
let sizeL = ref(props.filters.sizeL);
let sizeXl = ref(props.filters.sizeXl);
let waistM = ref(props.filters.waistM);
let waistH = ref(props.filters.waistH);
let waistHi = ref(props.filters.waistHi);
let col = ref(props.filters.col);
let filters = ref(props.filters);
let collection = ref(props.collection);
let categories = ref(props.categories);

// watch( (vMin, vMax) => {
//     if (vMin.value > vMax.value){
//         vMin.value = vMax.value
//     }
// });
// watch(vMin, (newValue, oldValue) => {
//     // do something with newValue and oldValue.
// });


watch([
    length34, length78, lengthBl, lengthS, lengthN,
    sizeXxs, sizeXs, sizeS, sizeM, sizeL, sizeXl,
    vMin, vMax,
    waistM, waistH, waistHi,
    blue, beige, military, pink, black, grey, col
], ([
        val1, val2, val3, val4, val5, val6, val7, val8, val9, val10, val11, val12, val13, val14, val15, val16, val17, val18, val19, val20, val21, val22, val23, data
    ]) => {
    Inertia.get(window.location, { length34: val1,  length78: val2, lengthBl: val3,  lengthS: val4, lengthN: val5,
                                  sizeXxs: val6,  sizeXs: val7, sizeS: val8,  sizeM: val9, sizeL: val10, sizeXl: val11,
                                  vMin: val12,  vMax: val13,
                                  waistM: val14,  waistH: val15, waistHi: val16,
                                  blue: val17,  beige: val18, military: val19, pink: val20, black: val21, grey: val22, col:val23,
                                  filters: data,}, {
        preserveState: true,
    });

});
  
// watch([
//     length34, length78, lengthBl, lengthS, lengthN,
// ], ([
//         val1, val2, val3, val4, val5, data
//     ]) => {
//     Inertia.get(window.location, { length34: val1,  length78: val2, lengthBl: val3,  lengthS: val4, lengthN: val5, filters: data,}, {
//         preserveState: true,
//     });

// });

// watch([
//     sizeXxs, sizeXs, sizeS, sizeM, sizeL, sizeXl,
// ], ([
//         val1, val2, val3, val4, val5, val6, data
//     ]) => {
//     Inertia.get(window.location, { sizeXxs: val1,  sizeXs: val2, sizeS: val3,  sizeM: val4, sizeL: val5, sizeXl: val6, filters: data,}, {
//         preserveState: true,
//     });

// });

// watch([
//     vMin, vMax
// ], ([
//         val1, val2,  data
//     ]) => {
//     // if(val1 > val2){
//     //     val1 = val2
//     // }else if(val2 < val1){
//     //     val2 = val1
//     // }

//     Inertia.get(window.location, { vMin: val1,  vMax: val2, filters: data,   }, {
//         preserveState: true,
//     });
// });

// watch([
//     waistM, waistH, waistHi,
// ], ([
//         val1, val2, val3, data,
//     ]) => {
//     Inertia.get(window.location, { waistM: val1,  waistH: val2, waistHi: val3, filters: data,}, {
//         preserveState: true,
//     });

// });

// watch([
//     blue, beige, military, pink, black, grey
// ], ([
//         val1, val2, val3, val4, val5, val6, data,
//     ]) => {
//     Inertia.get(window.location, { blue: val1,  beige: val2, military: val3, pink: val4, black: val5, grey: val6, filters: data,}, {
//         preserveState: true,
//     });

// });
</script>

<style scoped>

</style>
