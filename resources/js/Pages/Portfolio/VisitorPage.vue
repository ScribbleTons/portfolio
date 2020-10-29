<template>
<!--the body of the content-->
<div class="bg-gray-100 min-h-screen">
    <!-- the nav -->
    <nav class="bg-white border-b border-gray-100 sticky">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex justify-between w-full">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/">
                            <img :src="images.logo" width="50" class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <jet-nav-link as="link" class="m-4 text-md text-black" href="/" :active="$page.currentRouteName == 'home'">
                            HOME
                        </jet-nav-link>
                        <jet-nav-link as="link" class="m-4 text-md text-black" href="#about" :active="$page.currentRouteName == 'about'">
                            ABOUT
                        </jet-nav-link>
                        <jet-nav-link as="link" class="m-4 text-md text-black" href="#service" :active="$page.currentRouteName == 'service'">
                            SERVICE
                        </jet-nav-link>
                        <jet-nav-link as="link" class="m-4 text-md text-black" href="#portfolio" :active="$page.currentRouteName == 'portfolio'">
                            PORTFOLIO
                        </jet-nav-link>
                        <jet-nav-link as="link" class="m-4 text-md text-black" href="#contact" :active="$page.currentRouteName == 'contact'">
                            CONTACT
                        </jet-nav-link>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <jet-responsive-nav-link as="link" class="m-4 text-md text-black" href="/" :active="$page.currentRouteName == 'home'">
                    HOME
                </jet-responsive-nav-link>
                <jet-responsive-nav-link as="link" class="m-4 text-md text-black" href="#about" :active="$page.currentRouteName == 'about'">
                    ABOUT
                </jet-responsive-nav-link>
                <jet-responsive-nav-link as="link" class="m-4 text-md text-black" href="#service" :active="$page.currentRouteName == 'service'">
                    SERVICE
                </jet-responsive-nav-link>
                <jet-responsive-nav-link as="link" class="m-4 text-md text-black" href="#portfolio" :active="$page.currentRouteName == 'portfolio'">
                    PORTFOLIO
                </jet-responsive-nav-link>
                <jet-responsive-nav-link as="link" class="m-4 text-md text-black" href="#contact" :active="$page.currentRouteName == 'contact'">
                    CONTACT
                </jet-responsive-nav-link>
            </div>
        </div>
    </nav>
    <!-- End of nav -->
    <!-- main -->
    <main>
        <section>
            <!-- background section -->
            <div class="h-700 w-full bg-cover" :style="images.bg">
                <div class="block lg:flex justify-between">
                    <div class="relative w-68 ml-2 viewer">
                        <h1 class="text-xl uppercase tracking-widest font-bold mb-6">Emmanuel Ugwuoke</h1>
                        <div class="block">
                            <p class="text-lg uppercase tracking-widest mb-4">Full Stack Developer</p>
                            <div class="w-64 block md:flex md:w-full">
                                <a href="#contact">
                                    <button class="mt-2 mb-2 mr-2 px-4 py-2 border border-transparent bg-black outline-none text-white uppercase tracking-widest hover:shadow-lg">Hire me</button>
                                </a>
                                <a href="#about">
                                    <button class="md:m-2 px-4 py-2 border border-black bg-white border-outline-none text-black uppercase tracking-widest hover:shadow-lg">Explore more</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-10 px-4 w-1/2 h-full">
                        <img class="emmaSet" :src="images.emma" alt="Emmanuel">
                    </div>
                </div>
            </div>
        </section> <!-- end of background section -->
        <section id="about">
            <!-- about seection -->
            <div class="flex flex-col items-center bg-gray-200 w-full">
                <h2 class="uppercase tracking-widest mt-4 text-2xl">about</h2>
                <img class="p-2" :src="images.lines" alt="lines">
                <p class="text-center px-4 my-5 text-lg lg:px-20">Hello! I'm Emmanuel, a full-stack developer, a PHP Laravel and Vue.js enthusiast, a guy slighty obsessed for code quality, and love to collaborate and solve problems with others. Also I'm a software project manager. I’m currently available for freelance work. If you have a project that you want to get started or think you need my help with something, then get in touch.</p>
                <p class="text-center px-4">
                <blockquote class="text-md italic font-bold">The noblest art is that of making others Happy.</blockquote>
                <div>- P.T. Barnum</div>
                </p>
                <a href="/download/Emmanuel-Resume.pdf" target="_blank" download>
                    <button class="px-4 my-4 py-2 bg-black outline-none text-white uppercase tracking-tight hover:shadow-lg">
                        Download my cv
                    </button>
                </a>
            </div>

            <section>
                <!-- skill section -->
                <div class="block w-full bg-white pb-8">
                    <div class="flex flex-col items-center">
                        <h2 class="uppercase tracking-widest mt-4 text-xl">Skill</h2>
                        <img class="pt-2" :src="images.lines" alt="lines">
                    </div>
                    <div class="mt-8 px-4 w-full flex flex-col">
                        <div class="block md:grid grid-col-2 gap-2 xl:left-40">
                            <div class="col-start-1 col-span-2 lg:pl-20">
                                <div class="p-2">
                                    <h2 class="uppercase tracking-widest text-md">html/css</h2>
                                    <progress-bar :value="80"></progress-bar>
                                </div>
                                <div class="p-2">
                                    <h2 class="uppercase tracking-widest text-md">Javascript</h2>
                                    <progress-bar :value="65"></progress-bar>
                                </div>
                                <div class="p-2">
                                    <h2 class="uppercase tracking-widest text-md">PHP</h2>
                                    <progress-bar :value="70"></progress-bar>
                                </div>
                            </div>

                            <div class="col-start-3">
                                <div class="p-2">
                                    <h2 class="uppercase tracking-widest text-md">Laravel</h2>
                                    <progress-bar :value="75"></progress-bar>
                                </div>
                                <div class="p-2">
                                    <h2 class="uppercase tracking-widest text-md">vue.js</h2>
                                    <progress-bar :value="60"></progress-bar>
                                </div>
                                <div class="p-2">
                                    <h2 class="uppercase tracking-widest text-md">Software Project MGMT</h2>
                                    <progress-bar :value="50"></progress-bar>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </section> <!-- end of about section -->
        <section id="service">
            <div class="relative services overlay">
                <!-- service section -->
                <div class="service-card px-5 py-10 md:px-20 md:py-20">
                    <div class="flex flex-col items-center my-0">
                        <h2 class="uppercase tracking-widest text-xl">What I do</h2>
                        <img class="p-2" :src="images.lines" alt="lines" width="100">
                    </div>
                    <div class="block mt-10 mx-5 md:inline-flex items-center justify-between">
                        <div class="mx-2 my-4 flex flex-col items-center text-center">
                            <object class="p-2" :data="images.frontend" type="image/svg+xml" alt="Front-end developer" width="70" height="70"></object>
                            <h4 class="uppercase text-md font-bold tracking-widest m-2">Front-end</h4>
                            <p>As a javascript developer, I have experience in HTML5 and CSS3 techniques working with jQuery or more advanced javascript MVC frameworks such as Vue.js</p>
                        </div>
                        <div class="mx-2 my-4 flex flex-col items-center text-center">
                            <object class="p-2" :data="images.backend" type="image/svg+xml" alt="Front-end developer" width="70" height="70"></object>
                            <h4 class="uppercase text-md font-bold tracking-widest m-2">Back-end</h4>
                            <p>Utilising php frameworks such as Laravel for creating bespoke code, I've written application services including REST APIs, lead mangement applications and more.</p>
                        </div>
                        <div class="mx-2 my-4 flex flex-col items-center text-center">
                            <object class="p-2" :data="images.consultancy" type="image/svg+xml" alt="Coding and Software Mgt." width="70" height="70"></object>
                            <h4 class="uppercase text-md font-bold tracking-widest m-2">Consultancy</h4>
                            <p>As well as providing development services, I can also help you decide strategic roadmaps via consultancy services and manage your software project.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="portfolio">
            <div class="relative top-40 py-4 bg-white">
                <div class="flex flex-col items-center my-5">
                    <h2 class="uppercase tracking-widest text-xl">My work</h2>
                    <img class="p-2" :src="images.lines" alt="lines" width="100">
                </div>
                <div class="flex flex-col items-center py-10 px-20">
                    <div class="block text-center">
                        <h3 class="text-md font-bold">Currently no project delivered.</h3>
                        <p>However, check out <a class="underline" href="http://github.com/ScribbleTons" target="_blank" rel="noopener noreferrer">my github</a> link to see public projects I have been playing around with :) .</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="relative top-40">
                <div :style="images.contactBg">
                    <div class="flex flex-col">
                        <div class="inline-flex flex-col items-center my-5 mx-5 bg-white">
                            <h2 class="uppercase tracking-widest text-xl">Let's talk</h2>
                            <img class="p-2" :src="images.lines" alt="lines" width="100">
                            <p class="tracking-tight text-sm p-2 text-center">Send me a message below and I will respond to you within 24hrs.</p>
                        </div>
                        <div class="block md:px-20 lg:px-64">
                            <form action="/contact" method="post" autocomplete="true">
                                <input type="hidden" :value="csrfToken" name="_token" />
                                <div class="m-2">
                                    <input class="form-style" type="text" name="name" id="name" v-model="form.name" placeholder="Name" tabindex="1" required>
                                </div>
                                <div class="m-2">
                                    <input class="form-style" type="email" name="email" id="email" v-model="form.email" placeholder="Email" tabindex="2" required>
                                </div>
                                <div class="m-2">
                                    <textarea class="form-style resize-none" name="message" id="message" cols="30" rows="10" placeholder="What's on your mind?" tabindex="3" draggable="false" spellcheck="true" required></textarea>
                                </div>
                                <div class="m-2 flex flex-col items-center">
                                    <button type="submit" class="px-4 py-2 border border-black bg-white border-outline-none text-black uppercase tracking-widest hover:shadow-lg">Hire me</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- end of main -->
    <!--footer-->
    <footer class="max-h-18 w-full bg-black text-white relative top-40">

        <div class="flex flex-col items-center">
            <!--socials-->
            <div class="max-w-6xl flex">
                <a href="https://github.com/ScribbleTons" target="_blank" rel="noopener noreferrer"><i class="fa fa-github fa-2x m-2 " aria-hidden="true"></i></a>
                <a href="https://twitter.com/Ugwuokemmanuel" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter-square fa-2x m-2" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/ugwuoke-emmanuel" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin-square fa-2x m-2" aria-hidden="true"></i></a>
            </div>
            <!--copyright -->
            <div class="flex">
                <p class="text-lg text-center sm:text-sm">
                    Copyright &copy; {{year}} Ogmmanuel | All Rights Reserved
                </p>
            </div>

        </div>
    </footer>
    <!--end of footer-->
</div>
</template>

<script>
import ProgressBar from './Progress'
import JetNavLink from './../../Jetstream/NavLink'
import JetResponsiveNavLink from './../../Jetstream/ResponsiveNavLink'
export default {
    components: {
        JetNavLink,
        JetResponsiveNavLink,
        ProgressBar,
    },
    data() {
        return {
            csrfToken: null,
            showingNavigationDropdown: false,
            form: {
                name: '',
                email: '',
                message: ''
            },
            images: {
                logo: '/img/logo.svg',
                bg: {
                    backgroundImage: "url(/img/hero.jpg)",
                    minHeight: '600px',
                    backgroundRepeat: 'no-repeat',
                    backgroundPosition: 'center'
                },
                emma: '/img/emmanuel.png',
                lines: '/img/lines.svg',
                backend: 'img/back-end.svg',
                frontend: 'img/front-end.svg',
                consultancy: 'img/consultancy.svg',
                contactBg: {
                    background: "url(/img/counters-bg.jpg)  no-repeat fixed center / cover",
                    minHeight: '500px',
                },
            }

        }
    },
    mounted() {
        this.csrfToken = document.querySelector('meta[name="csrf-token"]').content;
    },
    computed: {
        path() {
            return window.location.pathname;
        },
        year() {
            var year = new Date()
            return year.getFullYear();
        }
    }
}
</script>

<style>
.form-style::placeholder,
.form-style:hover {
    opacity: 1;
    color: white;
    font-size: 1.5rem;
    font: bold;
    background-color: #1d5d58;
}

.form-style:-ms-input-placeholder,
.form-style::placeholder {
    opacity: 1;
    color: white;
    font-size: 1.5rem;
    font: bold;

}

.form-style:-ms-input-placeholder,
.form-style:focus {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    opacity: 1;
    background-color: #eeeeee;
    border-color: #ffffff;
    border-bottom-width: 4px;
    border-radius: 0.375rem;
    padding-top: 0.5rem;
    padding-right: 0.75rem;
    padding-bottom: 0.5rem;
    padding-left: 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    width: 100%;
    color: black;

}

.form-style {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    opacity: 0.5;
    background-color: #aaabf0;
    border-color: #ffffff;
    border-bottom-width: 4px;
    border-radius: 0.375rem;
    padding-top: 0.5rem;
    padding-right: 0.75rem;
    padding-bottom: 0.5rem;
    padding-left: 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    width: 100%;
    color: black;

}

.services:before {
    content: '';
    background: url('/img/services-bg.jpg') no-repeat fixed center / cover;
    width: 100%;
    height: 400px;
    position: absolute;
    left: 0;
    top: 0;
}

.overlay:after {
    content: '';
    width: 100%;
    height: 400px;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.5);
    top: 0;
    left: 0;
    z-index: 0;
}

.services .service-card {
    position: relative;
    background-color: #fff;
    box-shadow: 0px 0px 40px 8px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-left: 40px;
    margin-right: 40px;
    top: 100px;
}

@media screen and (max-width:768px) {
    .viewer {
        left: 4px;
        top: 50px;
    }

    .emmaSet {
        max-width: 178%;
        height: auto;
        position: relative;
        top: 30px;
        left: 56px;
    }

}

@media screen and (min-width:768px) {
    .viewer {
        left: 60px;
        top: 120px;
    }

    .emmaSet {
        max-width: 84%;
        height: auto;
        position: relative;
        left: 380px;
    }

}

@media screen and (min-width: 1024px) {
    .viewer {
        left: 150px;
        top: 220px;
    }

    .emmaSet {
        max-width: 70%;
        height: auto;
        position: relative;
        left: 40px;
    }
}
</style>
