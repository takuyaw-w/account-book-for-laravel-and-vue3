<script setup lang="ts">
defineProps<{
    headers: {
        value: string;
        text: string;
    }[];
    items: any[];
}>();
</script>

<template>
    <div :class="$style.wrapper">
        <table :class="$style.table">
            <thead>
                <tr>
                    <th v-for="(header, index) in headers" :key="index">
                        {{ header.text }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in items" :key="item">
                    <td v-for="(header, index) in headers" :key="index">
                        {{ item[header.value] }}
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
