<div class="add-currency" id="add-currency">
    <form>
        <label for="title">
            <span>Title</span>
            <input type="text" name="title" id="title" v-model="title">
        </label>
        <label for="code">
            <span>Code</span>
            <input type="text" name="code" id="code" v-model="code">
        </label>
        <label for="logo">
            <span>logo</span>
            <input type="file" name="logo" id="logo"
                   v-model="logo"
                   @change="previewFile"
            >
        </label>
        <label for="course">
            <span>Course</span>
            <input type="text" name="course" id="course" v-model="course">
        </label>
        <label for="min">
            <span>min</span>
            <input type="text" name="min" id="min" v-model="min">
        </label>
        <label for="max">
            <span>max</span>
            <input type="text" name="max" id="max" v-model="max">
        </label>
        <label for=""reserve>
            <span>reserve</span>
            <input type="text" name="reserve" id="reserve" v-model="reserve">
        </label>
        <label for="commision">
            <span>commision</span>
            <input type="text" name="commision" id="commision" v-model="commision">
        </label>
    </form>
</div>
<?php
