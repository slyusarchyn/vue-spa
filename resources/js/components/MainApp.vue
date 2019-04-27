<template>
    <div id="main">
        <AppHeader></AppHeader>
        <div class="content">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import AppHeader from "./Header";
    export default {
        name: 'main-app',
        components: {AppHeader},
    }
</script>
