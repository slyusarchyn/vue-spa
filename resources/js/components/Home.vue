<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>{{ welcome }}</h2>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'home',
        computed: {
            welcome() {
                return 'Welcome';
            }
        }
    }
</script>
