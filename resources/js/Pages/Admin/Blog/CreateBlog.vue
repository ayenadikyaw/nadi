<script setup>
import { ref, onMounted, watch } from "vue";
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import MapPicker from "@/Components/MapPicker.vue";
import Toast from "primevue/toast";
import { useToast } from "primevue/usetoast";
import Breadcrumb from "@/Components/Breadcrumb.vue";

const toast = useToast();

//props
const props = defineProps({
    blog: Object,
    isEdit: Boolean,
});

const breadcrumbItemsEdit = [];
const breadcrumbItemsCreate = [];

if(props.isEdit && props.blog){
    breadcrumbItemsEdit.push({ label: 'Home', url: route('admin.blogs.index') });
    breadcrumbItemsEdit.push({ label: 'Edit Blog', url: route('admin.blogs.edit', props.blog.id) });
}else{
    breadcrumbItemsCreate.push({ label: 'Home', url: route('admin.blogs.index') });
    breadcrumbItemsCreate.push({ label: 'Create Blog', url: route('admin.blogs.create') });
}

const form = useForm({
    title: props.blog ? props.blog.title : "",
    subtitle: props.blog ? props.blog.subtitle : "",
    content: props.blog ? props.blog.content : "",
    image: null,
    location: props.blog ? props.blog.location : "",
    category: props.blog ? props.blog.category : "",
    status: props.blog ? props.blog.status : "Draft",
    method: props.isEdit ? "PUT" : "POST",
    enctype: "multipart/form-data",
});

const imageError = ref("");
const imagePreview = ref(null);

const editorConfig = {
    modules: {
        toolbar: [
            ["bold", "italic", "underline", "strike"],
            ["blockquote", "code-block"],
            [{ header: 1 }, { header: 2 }],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ align: [] }],
            ["clean"],
        ],
    },
    theme: "snow",
};

const handleImageUpload = (event) => {
    const file = event.target.files[0];
    if (file) {
        if (file.size > 2000000) {
            imageError.value = "Image size should not exceed 2MB";
            return;
        }
        imagePreview.value = URL.createObjectURL(file);
        form.image = file;
        imageError.value = "";
    }
};

const onSubmit = () => {
    console.log(form, "form submitdata");
    form.post(route("admin.blogs.store"), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            toast.add({
                severity: 'success',
                detail: 'Blog created successfully',
                life: 3000
            });
        },
        onError: (errors) => {
            form.errors = errors;
            toast.add({
                severity: 'error',
                detail: 'Blog creation failed',
                life: 3000
            });
        },
    });
};

const updateBlog = (blog) => {
    if (form.image instanceof File) {
        form.transform((data) => ({
            ...data,
            _method: "PUT",
        })).post(route("admin.blogs.update", blog), {
            preserveScroll: true,
            onSuccess: () => {
                toast.add({
                    severity: 'success',
                    detail: 'Blog updated successfully',
                });
            },
            onError: () => {
                console.log(errors, "errors");
                toast.add({
                    severity: 'error',
                    detail: 'Blog update failed',
                    life: 3000
                });
            },
        });
    } else {
        form.transform((data) => ({
            ...data,
            image: null,
            _method: "PUT",
        })).post(route("admin.blogs.update", blog), {
            preserveScroll: true,
            onSuccess: () => {
                toast.add({
                    severity: 'success',
                    detail: 'Blog updated successfully',
                    life: 3000
                });
            },
            onError: () => {
                toast.add({
                    severity: 'error',
                    detail: 'Blog update failed',
                });
            },
        });
    }
};

const handleStatusChange = () => {
    form.status = form.status === 'Draft' ? 'Published' : 'Draft';
};

const cancelBlog = () => {
    form.reset();
    form.clearErrors();
    imagePreview.value = null;
    imageError.value = "";
};

onMounted(() => {
    if (props.isEdit) {
        form.image = props.blog.image;
        imagePreview.value = props.blog.image;
        form.status = props.blog.status;
    }
});
</script>

<template>
    <!--toast section-->
    <Toast />
    <div class="p-6 mx-auto">
        <div class="mb-8">
          <div v-if="isEdit">
            <Breadcrumb :items="breadcrumbItemsEdit"/>
          </div>
          <div v-else>
            <Breadcrumb :items="breadcrumbItemsCreate"/>
          </div>
        </div>

        <form
            @submit.prevent="props.isEdit ? updateBlog(props.blog) : onSubmit()"
            class="space-y-6"
        >
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div>
                        <label
                            class="block text-sm font-medium text-primary mb-1"
                            >Blog Title</label
                        >
                        <input
                            type="text"
                            class="w-full border-2 border-gray-300 rounded-md p-2 bg-transparent focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            v-model="form.title"
                        />
                    </div>
                    <InputError
                        v-if="form.errors.title"
                        :message="form.errors.title"
                        class="mt-2"
                    />
                    <div class="mt-8">
                        <label
                            class="block text-sm font-medium text-primary mb-1"
                            >Blog Subtitle</label
                        >
                        <input
                            type="text"
                            class="w-full border-2 border-gray-300 rounded-md p-2 bg-transparent focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            v-model="form.subtitle"
                        />
                    </div>
                    <InputError
                        v-if="form.errors.subtitle"
                        :message="form.errors.subtitle"
                    />
                    <!--category section-->
                    <div class="mt-8">
                        <label
                            class="block text-sm font-medium text-primary mb-1"
                            >Blog Category</label
                        >
                        <select
                            class="w-full border-2 border-gray-300 rounded-md p-2 bg-transparent focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            v-model="form.category"
                        >
                            <option value="" disabled selected>
                                Select Category
                            </option>
                            <option value="Technology">Technology</option>
                            <option value="Business">Business</option>
                            <option value="Health">Health</option>
                            <option value="Education">Education</option>
                            <option value="Travel">Travel</option>
                            <option value="Lifestyle">Lifestyle</option>
                        </select>
                    </div>
                    <InputError
                        v-if="form.errors.category"
                        :message="form.errors.category"
                    />
                    <!--status section-->
                    <div class="mt-8">
                        <label
                            class="block text-sm font-medium text-primary mb-1"
                            >Blog Status</label
                        >
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                v-model="form.status"
                                :true-value="'Published'"
                                :false-value="'Draft'"
                                class="mr-2 rounded-sm checked:bg-primary checked:border-primary accent-primary"
                            />
                            <span class="capitalize">{{ form.status }}</span>
                        </div>
                    </div>
                </div>
                <!--image upload section-->
                <div>
                    <label class="block text-sm font-medium text-primary mb-1"
                        >Blog Image</label
                    >
                    <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary transition-colors"
                    >
                        <div class="space-y-2 text-center">
                            <div
                                class="mx-auto h-48 w-full text-gray-400 flex items-center justify-center"
                            >
                                <img
                                    v-if="imagePreview"
                                    :src="imagePreview"
                                    @change="handleImageUpload"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                                <i v-else class="pi pi-image text-5xl"></i>
                            </div>
                            <div
                                class="flex items-center justify-center text-sm text-gray-600"
                            >
                                <label
                                    for="blog-image"
                                    class="relative cursor-pointer rounded-md font-medium text-primary hover:text-primary/90"
                                >
                                    <span>Upload a file</span>
                                    <input
                                        id="blog-image"
                                        name="blog-image"
                                        type="file"
                                        class="sr-only"
                                        @change="handleImageUpload"
                                        accept="image/*"
                                    />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                            </p>
                        </div>
                    </div>
                    <InputError
                        v-if="form.errors.image"
                        :message="form.errors.image"
                        class="mt-2"
                    />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!--Content Section-->
                <div>
                    <label class="block text-sm font-medium text-primary mb-1"
                        >Blog Content</label
                    >
                    <QuillEditor
                        v-model:content="form.content"
                        :toolbar="editorConfig.modules.toolbar"
                        :theme="editorConfig.theme"
                        class="!h-96 text-sm mb-12 text-white bg-transparent"
                        contentType="html"
                    />
                </div>
                <InputError
                    v-if="form.errors.content"
                    :message="form.errors.content"
                />
                <!--Map Picker Section-->
                <div>
                    <label class="block text-sm font-medium text-primary mb-1"
                        >Blog Location</label
                    >
                    <MapPicker @location-selected="(coords) => form.location = coords" :location="form.location" />
                </div>
            </div>

            <div class="flex justify-end mt-8 gap-4">
                <button
                    v-if="!props.isEdit"
                    type="button"
                    @click="cancelBlog"
                    class="bg-primary/50 text-white px-4 py-2 rounded-md hover:bg-primary/70 transition-colors"
                >
                    <i class="pi pi-times mr-2"></i>
                    Cancel
                </button>
                <button
                    type="submit"
                    class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/70 transition-colors"
                >
                    <i class="pi pi-check mr-2"></i>
                    {{ props.isEdit ? "Update Blog" : "Create Blog" }}
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped>
@keyframes float-slow {
    0%,
    100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}
@keyframes float-medium {
    0%,
    100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
}
@keyframes float-fast {
    0%,
    100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}
@keyframes slide-right {
    0% {
        transform: translateX(-100%);
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        transform: translateX(100%);
        opacity: 0;
    }
}
@keyframes slide-left {
    0% {
        transform: translateX(100%);
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        transform: translateX(-100%);
        opacity: 0;
    }
}
.animate-float-slow {
    animation: float-slow 6s ease-in-out infinite;
}
.animate-float-medium {
    animation: float-medium 5s ease-in-out infinite;
}
.animate-float-fast {
    animation: float-fast 4s ease-in-out infinite;
}
.animate-slide-right {
    animation: slide-right 4s linear infinite;
}
.animate-slide-left {
    animation: slide-left 4s linear infinite;
}
</style>
