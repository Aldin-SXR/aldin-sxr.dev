<template>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>Copyright {{ year }}. Made by <b>Aldin Kovačević</b>.</p>
            <p>Non est ad astra mollis e terris via.</p>
        </div>
    </footer>
</template>

<script>
import { ref } from 'vue'

export default {
    name: 'Footer',
    setup() {
        const year = ref(new Date().getFullYear())
        
        return {
            year
        }
    }
};
</script>

<style>
</style>