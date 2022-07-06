let currency = new Vue({
    el: "#currency",
    data: {
        count: 0,
        page: 1,
        maxPage: 10,

        searchText: "",
        allCurrency: [
            {
                id: 1,
                icon: "icon url 1",
                title: "title currency 1",
                checked: false
            },
            {
                id: 2,
                icon: "icon url 2",
                title: "title currency 2",
                checked: false
            },
            {
                id: 3,
                icon: "icon url 3",
                title: "title currency 3",
                checked: false
            },
            {
                id: 4,
                icon: "icon url 4",
                title: "title currency 4",
                checked: false
            },
            {
                id: 5,
                icon: "icon url 5",
                title: "title currency 5",
                checked: false
            },
            {
                id: 6,
                icon: "icon url 6",
                title: "title currency 6",
                checked: false
            },
            {
                id: 7,
                icon: "icon url 7",
                title: "title currency 7",
                checked: false
            }
        ],
        currency: {}
    },
    methods: {
        currentPage: function (){
            return this.allCurrency;
        }
    }
});