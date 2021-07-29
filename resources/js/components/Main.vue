<template>
    <div>
        <nav-component />
        <header-component />
        <page-component />
        <footer-component />
        <sidebar-component />
    </div>
</template>

<script>
import navigation from "./Navigation.vue";
import mainmovies from "./Mainmovies.vue";
import page from "./Page.vue";
import footer from "./Footer.vue";
import sidebar from "./Sidebar.vue";

export default {
    name: "main-page",
    data: () => {
        return {};
    },
    components: {
        "nav-component": navigation,
        "header-component": mainmovies,
        "page-component": page,
        "footer-component": footer,
        "sidebar-component": sidebar
    }
};
</script>

<style scoped></style>
