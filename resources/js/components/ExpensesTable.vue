<script setup lang="ts">
defineProps<{
    headers: {
        value: string;
        text: string;
        href?: boolean;
    }[];
    items: any[];
}>();
</script>

<template>
    <div :class="$style.wrapper">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th v-for="(header, index) in headers" :key="index">
                        {{ header.text }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in items" :key="index">
                    <td v-for="(header, index) in headers" :key="index">
                        <template v-if="header.href">
                            <a variant="text" :href="item.href">
                                {{ item[header.value] }}
                            </a>
                        </template>
                        <template v-else>
                            {{ item[header.value] }}
                        </template>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style module>
.wrapper {
}
.table {
    width: 100%;
    border-collapse: collapse;
}
.table thead {
    background-color: #ddd;
}
.table td,
.table th {
    border: 1px solid #ccc;
    padding: 10px;
}
.table th {
    text-align: center;
}
.table td {
    text-align: left;
}
</style>
