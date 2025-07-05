<script setup>
import { ref } from 'vue';

const news = ref(10)
const page = ref(1)

/**
 * Scroll through sections
 * @param direction {String} - Scroll direction ('left' or 'right')
 * @param className {String} - Target container class for scrolling
 */
function scroll(direction, className) {
    const container = document.querySelector(`.${className}`);
    const scrollAmount = 316 // Adjust based on your news item width - 300px + 16px gap

    if (direction === 'left') {
        container.scrollBy({
            top: 0,
            left: -scrollAmount,
            behavior: 'smooth' // Smooth scroll effect
        });
    } else {
        container.scrollBy({
            top: 0,
            left: scrollAmount,
            behavior: 'smooth'
        });
    }
}
</script>

<template>
    <v-app>
        <v-app-bar flat app>
            <div class="mx-auto d-flex align-center ga-3" style="width: 90%; max-width: 1000px;">
                <span class="app-title">CMS Template</span>

                <v-tabs class="my-3 pl-3">
                    <v-tab>Home</v-tab>
                    <v-tab>News</v-tab>
                    <v-tab>Projects</v-tab>
                    <v-tab>About Us</v-tab>
                </v-tabs>
            </div>
        </v-app-bar>


        <v-main class="mx-auto" style="width: 90%; max-width: 1000px;">
            <hr class="my-10" style="border: 2px solid black;">

            <div class="app-title">
                News
            </div>

            <div class="news-scroll-wrapper">
                <div class="scroll-left" @click="scroll('left', 'news-container')">
                    <v-icon icon="fal fa-chevron-left" color="black" />
                </div>
                <div class="scroll-right" @click="scroll('right', 'news-container')">
                    <v-icon icon="fal fa-chevron-right" color="black" />
                </div>

                <div class="news-container">
                    <div
                        v-for="(_, i) in news"
                        :key="i"
                    >
                        <div style="height: 200px; width: 300px; background-color: gray;" />
                    </div>
                </div>
            </div>

            <hr class="my-10" style="border: 2px solid black;">

            <div class="app-title">
                Projects
            </div>

            <div class="projects-scroll-wrapper">
                <div class="scroll-projects-left" @click="scroll('left', 'projects-container')">
                    <v-icon icon="fal fa-chevron-left" color="black" />
                </div>
                <div class="scroll-projects-right" @click="scroll('right', 'projects-container')">
                    <v-icon icon="fal fa-chevron-right" color="black" />
                </div>

                <div class="projects-container">
                    <div
                        v-for="(_, i) in news"
                        :key="i"
                    >
                        <div style="height: 200px; width: 300px; background-color: gray;" />
                    </div>
                </div>
            </div>

            <hr class="my-10" style="border: 2px solid black;">

            <v-row>
                <v-col cols="6">
                    <div class="app-title">Blog</div>

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Quo quod cupiditate rerum labore voluptates.
                        Explicabo accusantium earum molestiae soluta, repellendus repudiandae quos dolores molestias, quia consectetur rerum recusandae harum quidem?
                    </p>
                </v-col>

                <v-col cols="6">
                    <div class="app-title">About Us</div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ex molestias harum debitis fuga laboriosam officia tempore sed laborum odit similique!
                        Repellat similique atque praesentium maxime nam, debitis perspiciatis est ipsa.
                    </p>
                </v-col>
            </v-row>

            <hr class="my-10" style="border: 2px solid black;">

            <div class="d-flex flex-column align-center">
                <div class="app-title">Team</div>

                <p class="text-center" style="max-width: 600px;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quaerat, ipsa inventore sed dolores labore nemo?
                    Laudantium esse saepe placeat animi cum magni debitis mollitia provident.
                    Facilis incidunt voluptate quasi odio?
                </p>
            </div>
        </v-main>

        <v-footer class="mx-auto px-6">Footer</v-footer>
    </v-app>
</template>

<style lang="scss" scoped>
.app-title {
    font-size: 1.5rem;
}

.news-scroll-wrapper, .projects-scroll-wrapper {
    position: relative;
    scroll-behavior: smooth;

    &:hover {
        .scroll-left, .scroll-right, .scroll-projects-left, .scroll-projects-right {
            opacity: 0.7;
        }
    }

    .scroll-left, .scroll-right, .scroll-projects-left, .scroll-projects-right {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        width: 60px;
        background-color: white;
        opacity: 0;
        z-index: 1;
        cursor: pointer;
    }

    .scroll-right, .scroll-projects-right {
        right: 0;
    }
}

.news-container, .projects-container {
    margin-top: 12px;
    display: flex;
    gap: 16px;
    max-width: 1248px;
    overflow: hidden;
}
</style>
