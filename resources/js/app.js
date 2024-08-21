import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
    window.Echo.channel('tasks')
        .listen('TaskUpdated', (event) => {
            alert('Task Updated: ' + event.task.title);
        });
});
