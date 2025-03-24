

<template>
    <fwb-table hoverable>
        <fwb-table-head>
          <slot name="table-head" />
        </fwb-table-head>
        <fwb-table-body>
            <slot name="table-body"/>
        </fwb-table-body>
      </fwb-table>
</template>

<script setup>
    import {
        FwbA,
        FwbTable,
        FwbTableBody,
        FwbTableCell,
        FwbTableHead,
        FwbTableHeadCell,
        FwbTableRow,
                    } from 'flowbite-vue'

</script>