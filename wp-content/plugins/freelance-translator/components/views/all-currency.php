<div class="currency" id="currency">
    <table>
        <thead>
        <tr>
            <td></td>
            <td>Icon</td>
            <td>ID</td>
            <td>Name</td>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(item, index) in currentPage()">
            <td><input type="checkbox" :checked="item.checked"></td>
            <td>{{item.icon}}</td>
            <td>{{item.id}}</td>
            <td>{{item.title}}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td></td>
            <td>Icon</td>
            <td>ID</td>
            <td>Name</td>
        </tr>
        </tfoot>
    </table>
</div>