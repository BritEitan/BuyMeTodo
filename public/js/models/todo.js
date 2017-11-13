Todos.Todo = DS.Model.extend({
    title: DS.attr('string'),
    isCompleted: DS.attr('boolean')
});


Todos.Todo.FIXTURES = [
    {
        id: 1,
        title: 'משימה F',
        isCompleted: true
    },
    {
        id: 2,
        title: 'משימה C',
        isCompleted: false
    },
    {
        id: 3,
        title: 'משימה D',
        isCompleted: false
    },
    {
        id: 4,
        title: 'משימה E',
        isCompleted: false
    },
    {
        id: 5,
        title: 'משימה G',
        isCompleted: false
    },
    {
        id: 6,
        title: 'משימה A',
        isCompleted: true
    },
    {
        id: 7,
        title: 'משימה B',
        isCompleted: true
    }
];

