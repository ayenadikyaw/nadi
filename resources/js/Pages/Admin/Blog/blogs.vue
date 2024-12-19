<script setup>
import { onMounted, ref } from "vue";
import DataTable from "primevue/datatable";
import Column from "primevue/column";
import { Link, router } from "@inertiajs/vue3";
import Toast from 'primevue/toast';
import { useToast } from 'primevue/usetoast';

const props = defineProps({
    blogs: Array,
});

const blogs = ref(props.blogs);

const toast = useToast();

const deleteBlog = (id) => {
    if (confirm("Are you sure you want to delete this blog?")) {
        router.delete(route("admin.blogs.destroy", id), {
            onSuccess: () => {
                blogs.value = blogs.value.filter(blog => blog.id !== id);
                
                toast.add({
                    severity: 'success',
                    summary: 'Blog Deleted',
                    detail: 'Blog has been deleted successfully',
                    life: 3000
                });
            },
            onError: () => {
                toast.add({
                    severity: 'error',
                    summary: 'Delete Failed',
                    detail: 'Failed to delete the blog',
                    life: 3000
                });
            }
        });
    }
};

const handleStatusChange = (id, currentStatus) => {
    const blog = blogs.value.find(blog => blog.id === id);
    if (blog) {
        blog.status = currentStatus === 'Draft' ? 'Published' : 'Draft';
        
        router.put(
            route('admin.blogs.update-status', id), 
            { status: blog.status },
            {
                onSuccess: () => {
                    toast.add({
                        severity: 'success',
                        summary: 'Status Updated',
                        detail: `Blog status changed to ${blog.status}`,
                        life: 3000
                    });
                },
                onError: () => {
                    toast.add({
                        severity: 'error',
                        summary: 'Status Update Failed',
                        detail: 'Failed to update status',
                        life: 3000
                    });
                }
            }
        );
    }
};
</script>
<template>
    <!--toast section-->
    <Toast />
    <!--header section-->
    <div class="p-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Blogs</h1>
        <Link
            :href="route('admin.blogs.create')"
            class="bg-primary hover:bg-primary/80 text-white px-4 py-2 rounded-md"
            ><i class="pi pi-plus mr-2"></i>Create Blog</Link
        >
    </div>
    <!--table section-->
    <div class="p-6">
        <DataTable
            :value="blogs"
            stripedRows
            class="w-full text-sm"
            scrollable
            resizableColumns
            columnResizeMode="expand"
            paginator
            :rows="10"
            :rowsPerPageOptions="[10, 20, 50]"
            :totalRecords="blogs.length"
            responsiveLayout="scroll"
            breakpoint="sm"
        >
            <Column field="title" header="Title" sortable>
                <template #body="slotProps">
                    <span class="font-semibold">{{
                        slotProps.data.title
                    }}</span>
                </template>
            </Column>
            <Column field="subtitle" header="Subtitle" sortable>
                <template #body="slotProps">
                    <span class="text-gray-400">{{
                        slotProps.data.subtitle.substring(0, 30) + "..."
                    }}</span>
                </template>
            </Column>
            <Column field="category" header="Category">
                <template #body="slotProps">
                    {{ slotProps.data.category }}
                </template>
            </Column>

            <Column field="content" header="Content">
                <template #body="slotProps">
                    <span>{{
                        slotProps.data.content.substring(0, 50) + "..."
                    }}</span>
                </template>
            </Column>
            <Column field="status" header="Status">
                <template #body="slotProps">
                    <div class="flex items-center">
                        <button
                            @click="
                                handleStatusChange(
                                    slotProps.data.id,
                                    slotProps.data.status
                                )
                            "
                            :class="{
                                'bg-primary':
                                    slotProps.data.status === 'Published',
                                'bg-gray-500':
                                    slotProps.data.status === 'Draft',
                            }"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out"
                        >
                            <span
                                :class="{
                                    'translate-x-5':
                                        slotProps.data.status === 'Published',
                                    'translate-x-0':
                                        slotProps.data.status === 'Draft',
                                }"
                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                            />
                        </button>
                        <span class="ml-2 text-sm">
                            {{
                                slotProps.data.status === "Published"
                                    ? "Published"
                                    : "Draft"
                            }}
                        </span>
                    </div>
                </template>
            </Column>
            <Column
                header="Actions"
                :exportable="false"
                style="min-width: 8rem"
            >
                <template #body="slotProps">
                    <div class="flex gap-2">
                        <Link
                            :href="route('admin.blogs.edit', slotProps.data.id)"
                            class="p-2 text-primary hover:text-primary/80 rounded-full hover:bg-primary/10"
                        >
                            <i class="pi pi-pencil"></i>
                        </Link>
                        <button
                            @click="deleteBlog(slotProps.data.id)"
                            class="p-2 text-white hover:text-red-700 rounded-full hover:bg-red-100"
                        >
                            <i class="pi pi-trash"></i>
                        </button>
                    </div>
                </template>
            </Column>
        </DataTable>
    </div>
</template>

<style scoped>
:deep(td) {
    height: 50px;
}
:deep(.p-datatable-paginator-bottom) {
    border: none;
}

:deep(.p-paginator) {
    border: none;
    padding-top: 1rem;
    color: #c778dd;
    background: #282c33;
}

:deep(.p-paginator .p-paginator-pages .p-paginator-page) {
    min-width: 2.5rem;
    height: 2.5rem;
    margin: 0 0.2rem;
    border-radius: 8px;
    background: #1e2127;
    color: #abb2bf;
    border: 1px solid #353a42;
    transition: all 0.2s;
}

:deep(.p-paginator .p-paginator-pages .p-paginator-page.p-highlight) {
    background: #c778dd;
    color: #1e2127;
    border-color: #c778dd;
}

:deep(
        .p-paginator
            .p-paginator-pages
            .p-paginator-page:not(.p-highlight):hover
    ) {
    background: #353a42;
    color: #c778dd;
    border-color: #c778dd;
}

:deep(.p-paginator-first),
:deep(.p-paginator-prev),
:deep(.p-paginator-next),
:deep(.p-paginator-last) {
    min-width: 2.5rem;
    height: 2.5rem;
    margin: 0 0.2rem;
    border-radius: 8px;
    background: #1e2127;
    color: #abb2bf;
    border: 1px solid #353a42;
    transition: all 0.2s;
}

:deep(.p-paginator-first:hover),
:deep(.p-paginator-prev:hover),
:deep(.p-paginator-next:hover),
:deep(.p-paginator-last:hover) {
    background: #353a42;
    color: #c778dd;
    border-color: #c778dd;
}

:deep(.p-paginator-first:disabled),
:deep(.p-paginator-prev:disabled),
:deep(.p-paginator-next:disabled),
:deep(.p-paginator-last:disabled) {
    opacity: 0.5;
    cursor: not-allowed;
}

/* Add these new styles for column spacing */
:deep(.p-datatable .p-datatable-thead > tr > th) {
    padding: 1rem; /* Add padding to header cells */
}

:deep(.p-datatable .p-datatable-tbody > tr > td) {
    padding: 1rem; /* Add padding to body cells */
}

</style>

<style>
.p-toast{
    @apply bg-transparent;
}

.p-toast-message{
    @apply text-white;
}

.p-toast-message-text{
    @apply text-white;
}

.p-toast-message-icon .p-toast-close-button{
    @apply text-white;
    @apply border border-primary;
}

.p-icon.p-toast-close-icon{
    @apply h-3 w-3;
}

.p-toast-message-content{
    @apply bg-primary/70;
    @apply rounded-md;
    @apply p-4;
    @apply text-white;
    @apply border border-primary;
}

</style>
