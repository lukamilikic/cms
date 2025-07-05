<script setup>
import { ref } from 'vue'
import Button from '@/components/ui/Button.vue'
import DropdownMenu from '@/components/ui/DropdownMenu.vue'
import DropdownMenuItem from '@/components/ui/DropdownMenuItem.vue'
import { ChevronDown, Search } from 'lucide-vue-next'

const articles = ref([
  {
    id: 1,
    title: 'Big Story: How the World of Technology is Changing',
    excerpt: 'A detailed investigation into how technology affects our daily lives.',
    image: 'https://via.placeholder.com/600x400/333/fff?text=Featured+Article',
    category: 'Technology',
    date: 'July 5, 2025',
    author: 'Mark Peterson',
    featured: true
  },
  {
    id: 2,
    title: 'Innovations in Education',
    excerpt: 'New approaches to learning that are changing tradition.',
    image: 'https://via.placeholder.com/300x200/666/fff?text=Article+2',
    category: 'Education',
    date: 'July 4, 2025',
    author: 'Anna Nicholas'
  },
  {
    id: 3,
    title: 'The Future of Work',
    excerpt: 'What tomorrow\'s workplaces will look like.',
    image: 'https://via.placeholder.com/300x200/888/fff?text=Article+3',
    category: 'Business',
    date: 'July 3, 2025',
    author: 'Steven Johnson'
  },
  {
    id: 4,
    title: 'Culture in the Digital Age',
    excerpt: 'The transformation of art through technology.',
    image: 'https://via.placeholder.com/300x200/999/fff?text=Article+4',
    category: 'Culture',
    date: 'July 2, 2025',
    author: 'Michelle Stevens'
  }
]);

const mostRead = ref([
  { id: 1, title: 'Best Apps for Productivity', category: 'Technology' },
  { id: 2, title: 'How to Be Successful in 2025', category: 'Lifestyle' },
  { id: 3, title: 'Health and Wellness Trends', category: 'Health' },
  { id: 4, title: 'Travel Through the Balkans', category: 'Travel' }
]);

const categories = ref(['Technology', 'Education', 'Culture', 'Business', 'Health', 'Travel']);
</script>

<template>
    <div class="min-h-screen bg-background">
        <!-- Header -->
        <header class="header-bar sticky top-0 z-50 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
            <div class="header-container">
                <div class="logo">
                    <h1 class="logo-text">Big Stories</h1>
                </div>
                
                <div class="nav-section">
                    <DropdownMenu>
                        <template #trigger>
                            <Button variant="ghost" class="nav-btn">
                                Categories
                                <ChevronDown class="ml-1 h-4 w-4" />
                            </Button>
                        </template>
                        <DropdownMenuItem v-for="category in categories" :key="category">
                            {{ category }}
                        </DropdownMenuItem>
                    </DropdownMenu>
                </div>

                <div class="header-actions">
                    <Button variant="ghost" size="icon">
                        <Search class="h-4 w-4" />
                    </Button>
                    <Button variant="ghost" size="sm" class="nav-btn">Subscribe</Button>
                    <Button variant="ghost" size="sm" class="nav-btn">Account</Button>
                </div>
            </div>
        </header>

        <main class="main-content">
            <!-- Hero Section -->
            <section class="hero-section">
                <div class="hero-container">
                    <div class="featured-article" v-if="articles.find(a => a.featured)">
                        <div class="featured-image">
                            <img :src="articles.find(a => a.featured).image" :alt="articles.find(a => a.featured).title" />
                        </div>
                        <div class="featured-content">
                            <div class="article-meta">
                                <span class="category">{{ articles.find(a => a.featured).category }}</span>
                                <span class="date">{{ articles.find(a => a.featured).date }}</span>
                            </div>
                            <h2 class="featured-title">{{ articles.find(a => a.featured).title }}</h2>
                            <p class="featured-excerpt">{{ articles.find(a => a.featured).excerpt }}</p>
                            <div class="author">Author: {{ articles.find(a => a.featured).author }}</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content Sections -->
            <section class="content-sections">
                <div class="content-container">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="md:col-span-8">
                            <!-- Latest Articles -->
                            <div class="section-header">
                                <h3>Latest Articles</h3>
                            </div>
                            <div class="articles-grid">
                                <div 
                                    v-for="article in articles.filter(a => !a.featured)" 
                                    :key="article.id"
                                    class="article-card"
                                >
                                    <div class="article-image">
                                        <img :src="article.image" :alt="article.title" />
                                    </div>
                                    <div class="article-content">
                                        <div class="article-meta">
                                            <span class="category">{{ article.category }}</span>
                                            <span class="date">{{ article.date }}</span>
                                        </div>
                                        <h4 class="article-title">{{ article.title }}</h4>
                                        <p class="article-excerpt">{{ article.excerpt }}</p>
                                        <div class="author">{{ article.author }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-4">
                            <!-- Most Read Sidebar -->
                            <div class="sidebar">
                                <div class="section-header">
                                    <h3>Most Read</h3>
                                </div>
                                <div class="most-read-list">
                                    <div 
                                        v-for="(item, index) in mostRead" 
                                        :key="item.id"
                                        class="most-read-item"
                                    >
                                        <div class="rank">{{ index + 1 }}</div>
                                        <div class="content">
                                            <h5>{{ item.title }}</h5>
                                            <span class="category">{{ item.category }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Big Stories</h4>
                    <p>Your source for quality stories and analysis.</p>
                </div>
                <div class="footer-section">
                    <h5>Categories</h5>
                    <ul>
                        <li v-for="category in categories.slice(0, 4)" :key="category">{{ category }}</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h5>Contact</h5>
                    <p>info@bigstories.com</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

.header-bar {
    @apply border-b border-border;
}

.header-container {
    @apply flex items-center justify-between w-full max-w-6xl mx-auto px-5;
}

.logo-text {
    @apply text-2xl font-bold text-foreground m-0;
    font-family: 'Roboto', sans-serif;
}

.nav-section {
    @apply flex-1 flex justify-center;
}

.header-actions {
    @apply flex items-center gap-2;
}

.hero-section {
    @apply bg-background py-10;
}

.hero-container {
    @apply max-w-6xl mx-auto px-5;
}

.featured-article {
    @apply flex gap-10 items-start;
}

.featured-image {
    @apply flex-1;
}

.featured-image img {
    @apply w-full h-96 object-cover rounded;
}

.featured-content {
    @apply flex-1;
}

.article-meta {
    @apply flex gap-3 mb-4;
}

.article-meta .category {
    @apply text-muted-foreground text-sm font-medium;
}

.article-meta .date {
    @apply text-muted-foreground text-sm;
}

.featured-title {
    @apply text-3xl font-bold text-foreground mb-4 leading-tight;
}

.featured-excerpt {
    @apply text-muted-foreground text-lg leading-relaxed mb-4;
}

.author {
    @apply text-muted-foreground text-sm font-medium;
}

.content-sections {
    @apply bg-secondary/20 py-16;
}

.content-container {
    @apply max-w-6xl mx-auto px-5;
}

.section-header {
    @apply mb-8;
}

.section-header h3 {
    @apply text-2xl font-bold text-foreground m-0;
}

.articles-grid {
    @apply grid grid-cols-1 md:grid-cols-2 gap-8 mb-10;
}

.article-card {
    @apply bg-card rounded-lg overflow-hidden shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-md;
}

.article-image img {
    @apply w-full h-48 object-cover;
}

.article-content {
    @apply p-5;
}

.article-content .article-meta {
    @apply flex gap-3 mb-3;
}

.article-content .category {
    @apply text-muted-foreground text-xs font-medium;
}

.article-content .date {
    @apply text-muted-foreground text-xs;
}

.article-title {
    @apply text-lg font-semibold text-foreground mb-2 leading-tight;
}

.article-excerpt {
    @apply text-muted-foreground text-sm leading-relaxed mb-3;
}

.article-content .author {
    @apply text-muted-foreground text-xs font-medium;
}

.sidebar {
    @apply bg-card rounded-lg p-6 shadow-sm;
}

.sidebar .section-header {
    @apply mb-6;
}

.sidebar h3 {
    @apply text-xl font-bold text-foreground m-0;
}

.most-read-list {
    @apply flex flex-col gap-4;
}

.most-read-item {
    @apply flex items-start gap-3 p-3 rounded transition-colors hover:bg-secondary/50;
}

.rank {
    @apply bg-foreground text-background w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0;
}

.most-read-item .content {
    @apply flex-1;
}

.most-read-item h5 {
    @apply text-sm font-semibold text-foreground m-0 mb-1 leading-tight;
}

.most-read-item .category {
    @apply text-muted-foreground text-xs;
}

.footer {
    @apply bg-muted text-muted-foreground py-10;
}

.footer-content {
    @apply max-w-6xl mx-auto px-5 grid grid-cols-1 md:grid-cols-3 gap-10;
}

.footer-section h4 {
    @apply text-lg font-bold mb-4 text-foreground;
}

.footer-section h5 {
    @apply text-base font-semibold mb-3 text-foreground;
}

.footer-section p {
    @apply text-sm leading-relaxed;
}

.footer-section ul {
    @apply list-none p-0 m-0;
}

.footer-section li {
    @apply text-sm mb-2 cursor-pointer hover:text-foreground transition-colors;
}

@media (max-width: 768px) {
    .header-container {
        @apply flex-col gap-4;
    }
    
    .nav-section {
        @apply order-3;
    }
    
    .hero-section {
        @apply py-5;
    }
    
    .featured-article {
        @apply flex-col gap-5;
    }
    
    .featured-title {
        @apply text-2xl;
    }
    
    .content-sections {
        @apply py-10;
    }
    
    .articles-grid {
        @apply grid-cols-1 gap-6;
    }
}
</style>
