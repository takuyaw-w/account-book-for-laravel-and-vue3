<script setup lang="ts">
defineProps<{ userName: string }>();
</script>

<template>
    <v-navigation-drawer app location="left">
        <v-list-item prepend-icon="mdi-account" :title="userName">
        </v-list-item>

        <v-divider></v-divider>
    </v-navigation-drawer>
</template>
