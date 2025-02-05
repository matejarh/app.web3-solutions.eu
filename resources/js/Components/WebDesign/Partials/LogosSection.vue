<script setup>
import AnimatedLayout from "@/Components/Landing/AnimatedLayout.vue";
import LaravelLogo from "../../../../images/logos/laravel.svg";
import MySQLLogo from "../../../../images/logos/mysql.svg";
import RedisLogo from "../../../../images/logos/redis.svg";
import PythonLogo from "../../../../images/logos/python.svg";
import NginxLogo from "../../../../images/logos/nginx.svg";
import VueJSLogo from "../../../../images/logos/vuejs.svg";
import GitHubLogo from "../../../../images/logos/ubuntu.svg";
import UbuntuLogo from "../../../../images/logos/github.svg";
import TailwindcssLogo from "../../../../images/logos/tailwindcss.svg";
import DockerLogo from "../../../../images/logos/docker.svg";
</script>

<template>
    <AnimatedLayout>
        <section class="bg-gray-50 dark:bg-gray-800">
            <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
                <!-- <h2
                    class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                    Pri razvoju uporabljamo
                </h2> -->
                <div
                    class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-4 dark:text-gray-400">
                    <a href="https://laravel.com" target="_blank" class="flex justify-center items-center">
                        <img :src="LaravelLogo" alt="Laravel" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
                    <a href="https://www.mysql.com" target="_blank" class="flex justify-center items-center">
                        <img :src="MySQLLogo" alt="MySQL" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
                    <a href="https://redis.io" target="_blank" class="flex justify-center items-center">
                        <img :src="RedisLogo" alt="Redis" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
                    <a href="https://www.python.org" target="_blank" class="flex justify-center items-center">
                        <img :src="PythonLogo" alt="Python" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
                    <a href="https://www.nginx.com" target="_blank" class="flex justify-center items-center">
                        <img :src="NginxLogo" alt="Nginx" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
                    <a href="https://vuejs.org" target="_blank" class="flex justify-center items-center">
                        <img :src="VueJSLogo" alt="VueJS" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
<!--                     <a href="https://ubuntu.com/server" target="_blank" class="flex justify-center items-center">
                        <img :src="UbuntuLogo" alt="Ubuntu Server"
                            class="h-12 hover:text-gray-900 dark:hover:text-white" /></a> -->
                    <a href="https://tailwindcss.com" target="_blank" class="flex justify-center items-center">
                        <img :src="TailwindcssLogo" alt="Tailwind CSS"
                            class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
<!--                     <a href="https://github.com" target="_blank" class="flex justify-center items-center">
                        <img :src="GitHubLogo" alt="GitHub" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a> -->
                    <a href="https://www.docker.com" target="_blank" class="flex justify-center items-center">
                        <img :src="DockerLogo" alt="Docker" class="h-12 hover:text-gray-900 dark:hover:text-white" />
                    </a>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
