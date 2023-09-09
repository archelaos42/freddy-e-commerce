<template>
    <AppLayout>
    <div class="flex justify-center bg-gradient-to-b from-gray-200 pt-2">
        <div class="text-sm mt-1 mr-2"><span class="underline">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="12" height="12"
                             viewBox="0 0 50 50">
                            <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                        </svg>
                    </span></div>

        <div class="mr-1 text-gray-400 text-sm">
            >
        </div>

        <Link :href="'/collection/' + collection.id" class="text-sm "><span class="underline">{{ collection.name }}</span></Link>
    </div>

    <h1 class="font-ropa text-tra text-3xl text-transform: uppercase text-center mb-14 mt-12">{{ product.name }}</h1>

    <div class="mx-60 border-b border-solid border-gray-200 mb-5">
        <div class="flex">
            <div class="w-1/2 flex p-5 mr-10">
                <div class="1/5 pr-5">
                    <img class="mb-3" src="https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N-66x100h.jpg"
                         @click="$page.props.selectedPhoto = 'https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N-667x1000h.jpg'"
                         alt="">
                    <img class="mb-3" src="https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N_M-66x100h.jpg"
                         @click="$page.props.selectedPhoto = 'https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N_M-667x1000h.jpg'"
                         alt="">
                    <img class="mb-3" src="https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N_-_02m-66x100h.jpg"
                         @click="$page.props.selectedPhoto = 'https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N_-_02m-667x1000h.jpg'"
                         alt="">
                </div>
                <div class="4/5">
<!--                    <img :src="'{{ $page.props.selectedPhoto }}" alt="">-->
                    <img :src="selectedPhoto" alt="">

                    <!--                    <img src="https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N-667x1000h.jpg" alt="">-->
                </div>
            </div>
            <div class="w-1/2">
                <div class="h-20 flex bg-[#F5F5F5]">
                    <div class="w-1/5 pt-2">
                        <img src="https://freddy.hr/image/cache/catalog/bannerji/tehnologija/teh-now-100x66fill.png" alt="">
                    </div>
                    <div class="text-sm text-gray-700 py-4 font-ibm">The amazing two-elastic fabric ensures a perfect fit, as well as 5 pockets for that casual vibe. Click for more information > ></div>
                </div>
                <div class="flex justify-left border-solid border-t border-b border-gray-200 mt-3">
                    <button @click="$page.props.selectedTab = 'description'">
                        <h3 :class="$page.props.selectedTab === 'description' ? 'border-black' : 'border-none'"
                            class="py-3 relative top-2 font-ropa mr-6 text-black font-bold text-base text-transform: uppercase mt-0 mb-2 border-b-2 border-solid">Description</h3>
                    </button>
                    <button @click="$page.props.selectedTab = 'label'">
                        <h3 :class="$page.props.selectedTab === 'label' ? 'border-black' : 'border-none'"
                            class="py-3 relative top-2 font-ropa mr-6 text-black font-bold text-base text-transform: uppercase mt-0 mb-2 border-b-2 border-solid">Label</h3>
                    </button>
                    <Link :href="('/sizetable')"><h3 class="py-3 relative top-2 font-ropa text-black font-bold text-base text-transform: uppercase mt-0 mb-2">Size table</h3></Link>
                </div>
                <div>
                    <div v-if="$page.props.selectedTab === 'description'">
                        <div class="text-sm font-ibm my-5">N.O.W eco leather pants. They look like jeans, but are as comfortable as tights. Classic 5 pocket fit.</div>
                        <div class="text-sm font-ibm my-5">
                        <div>
                            Product code: NOW1HC006P_N
                        </div>
                        </div>
                    </div>
                    <div class="border-solid border-gray-200 border-1 mt-6 font-ropa" v-if="$page.props.selectedTab === 'label'">
                        <div class="border-solid border-gray-200 border-1 bg-gray-200 p-2">{{product.name}}</div>
                        <div class="flex border-solid border-gray-200 border-1 p-2"><div class="w-1/2">Material</div><div>100% Cotton</div></div>
                        <div class="flex border-solid border-gray-200 border-1 p-2"><div class="w-1/2">Color</div><div>Black</div></div>
                        <div class="flex border-solid border-gray-200 border-1 p-2"><div class="w-1/2">Model</div><div>Loose</div></div>
                        <div class="flex border-solid border-gray-200 border-1 p-2"><div class="w-1/2">Waist</div><div>Normal</div></div>
                        <div class="flex border-solid border-gray-200 border-1 p-2"><div class="w-1/2">Length</div><div>Normal</div></div>
                    </div>


                    <div class="flex mt-1">
                        <div class="text-3xl">{{ $page.props.averageGrade }}</div>
<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="grey" viewBox="-5 0 30 30"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/>-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="grey" viewBox="-5 0 30 30"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/>-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="grey" viewBox="-5 0 30 30"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/>-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="grey" viewBox="-5 0 30 30"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/>-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="grey" viewBox="-5 0 30 30"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/>-->
<!--                            </svg>-->
                        <div class="flex  pt-2">
                            <div class="">Based on {{ $page.props.reviewCount }} reviews&nbsp</div>
                            <Link :href="'/reviews/' + $page.props.product.id"><div class="text-black"> - View reviews</div></Link>&nbsp;
                            <Link :href="'/review/' + $page.props.product.id"><div class="text-black"> - Write a review</div></Link>
                        </div>
                    </div>
                    <h1 class="font-ropa text-tra text-5xl text-transform: uppercase text-centers my-2">{{ product.price }} €</h1>
                    <div>Award point value: 1190</div>
                    <div class="flex">
                        <div class="mr-32 my-auto ml-0">SIZE&nbsp<span class="text-red-600">*</span></div>
                        <div>
                            <button class="border-1 border-solid ml-2 h-8 w-10"
                                    @click="$page.props.selectedSize = 'XXS'"
                                    :class="$page.props.selectedSize === 'XXS' ? 'border-blue-600' : 'border-black',
                                            $page.props.selectedSize === 'XXS' ? 'border-2' : 'border-1'"
                            >XXS</button>
                            <button class="border-1 border-solid ml-2 h-8 w-8"
                                    @click="$page.props.selectedSize = 'XS'"
                                    :class="$page.props.selectedSize === 'XS' ? 'border-blue-600' : 'border-black',
                                            $page.props.selectedSize === 'XS' ? 'border-2' : 'border-1'"
                            >XS</button>
                            <button class="border-1 border-solid ml-2 h-8 w-8"
                                    @click="$page.props.selectedSize = 'S'"
                                    :class="$page.props.selectedSize === 'S' ? 'border-blue-600' : 'border-black',
                                            $page.props.selectedSize === 'S' ? 'border-2' : 'border-1'"
                            >S</button>
                            <button class="border-1 border-solid ml-2 h-8 w-8"
                                    @click="$page.props.selectedSize = 'M'"
                                    :class="$page.props.selectedSize === 'M' ? 'border-blue-600' : 'border-black',
                                            $page.props.selectedSize === 'M' ? 'border-2' : 'border-1'"
                            >M</button>
                            <button class="border-1 border-solid ml-2 h-8 w-8"
                                    @click="$page.props.selectedSize = 'L'"
                                    :class="$page.props.selectedSize === 'L' ? 'border-blue-600' : 'border-black',
                                            $page.props.selectedSize === 'L' ? 'border-2' : 'border-1'"
                            >L</button>
<!--                            <button class="border-1 border-solid ml-2 h-8 w-8" @click="$page.props.selectedSize = 'XL'">XL</button>-->
                            <button class="border-1 border-solid ml-2 h-8 w-8"
                                    @click="$page.props.selectedSize = 'XL'"
                                    :class="$page.props.selectedSize === 'XL' ? 'border-blue-600' : 'border-black',
                                            $page.props.selectedSize === 'XL' ? 'border-2' : 'border-1'"
                            >XL</button>
                        </div>
                    </div>
                    <div class="flex mt-6 justify-between">
                        <div class="flex">
                            <div class="flex mr-1">
                                <div class="my-auto mr-1 ml-0"><input v-model="$page.props.quantity" class="w-12 h-8" type="text"></div>


                                <div class="my-auto mx-1">
                                    <div>
                                        <button @click="$page.props.quantity += 1 "><svg width="12" height="12" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M23.245 20l-11.245-14.374-11.219 14.374-.781-.619 12-15.381 12 15.391-.755.609z"/>
                                        </svg></button>
                                    </div>
                                    <div>
                                        <button @click="$page.props.quantity > 1 ? $page.props.quantity -= 1 : console.log('cant')"><svg width="12" height="12" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="black" fill-rule="evenodd" clip-rule="evenodd"><path d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z"/>
                                        </svg></button>
                                    </div>
                                </div>
                            </div>
                            <button class="flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2 mr-3">

                                <div class="px-1 pt-1">
                                    <svg width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" fill="currentColor" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z" fill-rule="nonzero"/>
                                    </svg>
                                </div>

<!--                                <h1>Add to Cart</h1>-->
                                <Link
                                    :href="('/cart.store')"
                                    method="post"
                                    preserve-scroll
                                    :data="{
                                            id: product.id,
                                            name: product.name,
                                            qty: $page.props.quantity,
                                            price: product.price,
                                            size: selectedSize,
                                            // _token: this.$page.props.csrf_token,
                                            }"
                                    classes="px-3 py-1 mr-2 rounded text-white text-sm font-bold whitespace-no-wrap bg-blue-600 hover:bg-blue-800"
                                    as="button"
                                >Add to Cart</Link>

                            </button>
                            <div v-if="$page.props.flash.message" class="text-blue-600 mb-4">
                                {{ $page.props.flash.message }}
                            </div>
<!--                            <button class="flex bg-[#3D568F] font-ropa text-white text-transform: uppercase pr-1 pt-2 pl-2">-->

<!--                                <div class="px-1 pb-1">-->
<!--                                    <svg width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" fill="currentColor" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z" fill-rule="nonzero"/>-->
<!--                                    </svg>-->
<!--                                </div>-->

<!--                                <h1>Buy Now</h1>-->

<!--                            </button>-->
                        </div>
                        <button><svg clip-rule="evenodd" width="20" height="20" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"/>
                        </svg></button>
                    </div>
                    <div class="font-ibm mt-8">
                        <div>> Stock: In stock</div>
                        <div>> Award points: 119</div>
                        <div>> Code: NOW1HC006P_N</div>
                    </div>
                    <div id="slider" class="">
                        <h1 class="font-bold font-ropa text-tra text-base text-transform: uppercase mt-6">You have also looked at</h1>
                        <div class="relative bottom-3 mb-10">________</div>

                        <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
                            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                                <button
                                    type="button"
                                    data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="0"
                                    class="active"
                                    aria-current="true"
                                    aria-label="Slide 1"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="1"
                                    aria-label="Slide 2"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="2"
                                    aria-label="Slide 3"
                                ></button>
                            </div>
                            <Link :href="'/product/5'" class="carousel-inner relative w-full overflow-hidden font-ropa">
                                <div class="carousel-item active float-left w-full">
                                    <div class="flex">
                                        <div class="w-1/2 h-40 flex">
                                            <img
                                                src="https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N-98x150h.jpg"
                                                class="block"
                                                alt="Camera"
                                            />
                                            <div>
                                                <div class="text-sm text-black">WR.UP®, HIGH WAIST, SKINNY, BLACK</div>
                                                <span class="text-lg">127,05 EUR</span>
                                            </div>
                                        </div>
                                        <div class="w-1/2 h-40 flex">
                                            <img
                                                src="https://freddy.hr/image/cache/catalog/izdelki/S2WTWS1/rn%20pulover-98x150h.jpeg"
                                                class="block"
                                                alt="Camera"
                                            />
                                            <div>
                                                <div class="text-sm text-black">NOW®, NORMAL WAIST, CRNE</div>
                                                <span class="text-lg">127,05 EUR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="carousel-item float-left w-full">-->
                                    <!--<div class="flex">-->
                                    <!--    <div class="w-1/2 h-40 flex">-->
                                    <!--        <img-->
                                    <!--            src="https://freddy.hr/image/cache/catalog/izdelki/WRUP4HC006/nCF704dQ-98x150h.jpeg"-->
                                    <!--            class="block"-->
                                    <!--            alt="Camera"-->
                                    <!--        />-->
                                    <!--        <div>-->
                                    <!--            <div class="text-sm text-black">WR.UP®, NORMALNI STRUK, SKINNY, CRNE</div>-->
                                    <!--            <span class="text-lg">127,05 EUR</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="w-1/2 h-40 flex">-->
                                    <!--        <img-->
                                    <!--            src="https://freddy.hr/image/cache/catalog/izdelki/WRUP4RC006/usnje-98x150h.jpeg"-->
                                    <!--            class="block"-->
                                    <!--            alt="Camera"-->
                                    <!--        />-->
                                    <!--        <div>-->
                                    <!--            <div class="text-sm text-black">WR.UP®, NORMALNI STRUK, SKINNY, CRNE</div>-->
                                    <!--            <span class="text-lg">127,05 EUR</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--</div>
                                   <div class="carousel-item float-left w-full">-->
<!--                                    <div class="flex">-->
<!--                                        <div class="w-1/2 h-40 flex">-->
<!--                                            <img-->
<!--                                                src="https://freddy.hr/image/cache/catalog/izdelki/WRUP4RC006/usnje-98x150h.jpeg"-->
<!--                                                class="block"-->
<!--                                                alt="Camera"-->
<!--                                            />-->
<!--                                            <div>-->
<!--                                                <div class="text-sm text-black">WR.UP®, NORMALNI STRUK, SKINNY, CRNE</div>-->
<!--                                                <span class="text-lg">127,05 EUR</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="w-1/2 h-40 flex">-->
<!--                                            <img-->
<!--                                                src="https://freddy.hr/image/cache/catalog/izdelki/CITYWALKLXCM_NV1/citywalklxcm_nv1_-_02M-98x150h.jpg"-->
<!--                                                class="block"-->
<!--                                                alt="Camera"-->
<!--                                            />-->
<!--                                            <div>-->
<!--                                                <div class="text-sm text-black">WR.UP®, NORMALNI STRUK, SKINNY, CRNE</div>-->
<!--                                                <span class="text-lg">127,05 EUR</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </Link>
<!--                            <button-->
<!--                                class="carousel-control-prev absolute bottom-full text-black flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-16"-->
<!--                                type="button"-->
<!--                                data-bs-target="#carouselExampleIndicators"-->
<!--                                data-bs-slide="prev"-->
<!--                            >-->
<!--                                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>-->
<!--                                <span class="text-black">Previous</span>-->
<!--                            </button>-->
<!--                            <button-->
<!--                                class="carousel-control-next absolute bottom-full flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"-->
<!--                                type="button"-->
<!--                                data-bs-target="#carouselExampleIndicators"-->
<!--                                data-bs-slide="next"-->
<!--                            >-->
<!--                                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>-->
<!--                                <span class="text-black">Next</span>-->
<!--                            </button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex mx-64 h-16 py-3 mt-3 bg-[#EEEEEE]">
        <div class="flex w-1/3 justify-center">
            <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path d="M20.431 9.548c-.95-2.602-.411-3.427.589-4.478l.85-.893c-4.761-4.065-3.786-3.222-4.854-4.177-.539.557-1.193 1.428-2.42 1.428-1.26 0-2.08-.921-2.584-1.38-.557.492-1.385 1.38-2.608 1.38-1.242 0-1.92-.913-2.402-1.411l-4.871 4.16.85.893c.999 1.051 1.538 1.876.589 4.478-.843 2.309-1.57 3.991-1.57 5.817 0 3.266 2.071 5.67 5.682 6.597 2.596.666 2.989.951 4.318 2.038 1.329-1.087 1.722-1.372 4.318-2.038 3.612-.927 5.682-3.332 5.682-6.597 0-1.826-.727-3.507-1.569-5.817zm-5.832 6.452l-2.599-1.367-2.599 1.367.494-2.895-2.102-2.049 2.906-.422 1.301-2.634 1.3 2.634 2.906.422-2.104 2.049.497 2.895z"/></svg>            </div>
            <div class="">
                <h3 class="font-ropa font-bold text-transform: uppercase">Secure Shopping</h3>
                <div class="text-sm mt-1">Your shoping security is our number one concern.</div>
            </div>
        </div>
        <div class="flex w-1/3 justify-center">
            <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.666 22.908l-2.787-5.379-1.634.8c-1.773.86-5.383-6.191-3.649-7.12l1.648-.812-2.764-5.397-1.667.823c-5.702 2.972 3.351 20.569 9.183 17.903.096-.043 1.664-.815 1.67-.818zm4.902-2.603l1.041 1.71c-1.019.674-2.147 1.197-3.351 1.537l-.934-1.824c1.175-.28 2.27-.768 3.244-1.423zm2.922-3.022l1.882.752c-.678 1.162-1.546 2.199-2.56 3.071l-1.057-1.736c.668-.612 1.253-1.315 1.735-2.087zm.699-1.336c.522-1.211.811-2.546.811-3.947 0-5.519-4.481-10-10-10-2.497 0-4.781.917-6.534 2.432l-.933-1.824c2.05-1.632 4.645-2.608 7.467-2.608 6.623 0 12 5.377 12 12 0 1.664-.34 3.249-.953 4.69l-1.858-.743zm-3.511-.947h-1.438v-1.55h-2.88v-.989l2.46-3.96h1.858v3.81h.78v1.139h-.78v1.55zm-5.07 0h-4.608v-.919l.84-.76c1.42-1.27 2.11-2 2.13-2.761 0-.53-.32-.95-1.07-.95-.56 0-1.05.28-1.39.54l-.43-1.089c.49-.37 1.25-.67 2.13-.67 1.469 0 2.278.859 2.278 2.039 0 1.091-.789 1.961-1.728 2.801l-.6.5v.02h2.448v1.249zm3.632-2.689v-1.44c0-.391.02-.791.05-1.211h-.04c-.21.42-.38.8-.6 1.211l-.87 1.42v.02h1.46z"/></svg>            </div>
            <div class="mr-2">
                <h3 class="font-ropa font-bold text-transform: uppercase">Support</h3>
                <div class="text-sm mt-1">info@freddy.hr</div>
            </div>
        </div>
        <div class="flex w-1/3 justify-center">
            <div class=" mr-2">
                <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M5 11v1h8v-7h-10v-1c0-.552.448-1 1-1h10c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.089-.743 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-1c-.552 0-1-.448-1-1v-6h-2v-2h7v2h-3zm3 5.8c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-3-2.8h-10v2h.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6zm1-5v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-16-3h8v2h-8v-2z"/></svg>            </div>
            <div class="">
                <h3 class="font-ropa font-bold text-transform: uppercase">Free delivery</h3>
                <div class="text-sm mt-1">Upwards of 100 EUR.</div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class=" flex justify-center pb-1.5">
            <h1 class="font-bold font-ropa text-tra text-transform: uppercase text-sm pt-9 mx-64 h-16">
                <div class="border-solid border-b-2 pb-3 w-32">Related Products</div>
            </h1>
        </div>
        <div class="flex mx-64 mt-8 font-ropa text-base text-left text-gray-500 pb-16">
            <div class="mr-6">
                <a href="/">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/CITYWALKLXCM_NV1/citywalklxcm_nv1_-_02M-400x600w.jpg" alt="">
                </a>
                <h1>SPORTSKE TENISICE U VOJNOM UZORKU</h1>
                <div class="text-black text-xl">79,54 €</div>
            </div>
            <div class="mr-6">
                <a href="/">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP4RC006/usnje-400x600w.jpeg" alt="">
                </a>
                <h1>WR.UP® 7/8 SUPERSKINNY EKOLOŠKE KOŽNE HLAČE</h1>
                <div class="text-black text-xl">89,55 €</div>
            </div>
            <div class="mr-6">
                <a href="/">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP4HC006/nCF704dQ-400x600w.jpeg" alt="">
                </a>
                <h1 >WR.UP® 7/8 SUPERSKINNY EKOLOŠKE KOŽNE HLAČE</h1>
                <div class="text-black text-xl">191,22 €</div>
            </div>
            <div class="mr-6">
                <a href="/">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/S2WTWS1/rn%20pulover-400x600w.jpeg" alt="">
                </a>
                <h1 class="">Lagan i udoban crni džemper s metalnim netima</h1>
                <div class="text-black text-xl">111,87 €</div>
            </div>
        </div>
    </div>
    </AppLayout>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';
import 'tw-elements';
import AppLayout from "../Layouts/AppLayout.vue";

let props = defineProps({
    product: Object,
    collection: Object,
    selectedSize: String,
    // quantity: Number,
    selectedPhoto: String,
    averageGrade: Number,
    reviewCount: Number,
    selectedTab: String,
    // flash: {
    //     message: "Item added successfully!"
    // }

});



</script>

<style scoped>

</style>
