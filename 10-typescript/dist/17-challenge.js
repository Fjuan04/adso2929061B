"use strict";
// Clase para manejar la lista de tareas
class TodoList {
    constructor() {
        this.todos = [];
        this.nextId = 1;
    }
    // Agregar una nueva tarea
    addTodo(text) {
        if (text.trim() === '') {
            alert('Por favor ingresa una tarea válida');
            return;
        }
        const newTodo = {
            id: this.nextId++,
            text: text.trim(),
            completed: false,
            createdAt: new Date()
        };
        this.todos.push(newTodo);
        this.render();
        this.saveToLocalStorage();
    }
    // Eliminar una tarea por ID
    removeTodo(id) {
        this.todos = this.todos.filter(todo => todo.id !== id);
        this.render();
        this.saveToLocalStorage();
    }
    // Marcar tarea como completada o no completada
    toggleTodo(id) {
        const todo = this.todos.find(t => t.id === id);
        if (todo) {
            todo.completed = !todo.completed;
            this.render();
            this.saveToLocalStorage();
        }
    }
    // Obtener todas las tareas
    getAllTodos() {
        return this.todos;
    }
    // Obtener tareas completadas
    getCompletedTodos() {
        return this.todos.filter(todo => todo.completed);
    }
    // Obtener tareas pendientes
    getPendingTodos() {
        return this.todos.filter(todo => !todo.completed);
    }
    // Contar tareas totales
    getTotalCount() {
        return this.todos.length;
    }
    // Contar tareas completadas
    getCompletedCount() {
        return this.getCompletedTodos().length;
    }
    // Renderizar la lista en el DOM
    render() {
        const todoListElement = document.getElementById('todo-list');
        const todoCountElement = document.getElementById('todo-count');
        const completedCountElement = document.getElementById('completed-count');
        if (!todoListElement)
            return;
        if (this.todos.length === 0) {
            todoListElement.innerHTML = '<li class="text-center text-gray-500 py-4">No hay tareas. ¡Agrega una nueva!</li>';
        }
        else {
            todoListElement.innerHTML = this.todos.map(todo => `
                <li class="flex items-center justify-between p-4 bg-base-200 rounded-lg mb-2 ${todo.completed ? 'opacity-60' : ''}">
                    <div class="flex items-center gap-3 flex-1">
                        <input 
                            type="checkbox" 
                            class="checkbox checkbox-primary" 
                            ${todo.completed ? 'checked' : ''}
                            onchange="todoList.toggleTodo(${todo.id})"
                        />
                        <span class="${todo.completed ? 'line-through text-gray-500' : ''}">${this.escapeHtml(todo.text)}</span>
                    </div>
                    <button 
                        class="btn btn-sm btn-error"
                        onclick="todoList.removeTodo(${todo.id})"
                    >
                        Eliminar
                    </button>
                </li>
            `).join('');
        }
        // Actualizar contadores
        if (todoCountElement) {
            todoCountElement.textContent = this.getTotalCount().toString();
        }
        if (completedCountElement) {
            completedCountElement.textContent = this.getCompletedCount().toString();
        }
    }
    // Guardar en localStorage
    saveToLocalStorage() {
        try {
            localStorage.setItem('todos', JSON.stringify(this.todos));
        }
        catch (error) {
            console.error('Error al guardar en localStorage:', error);
        }
    }
    // Cargar desde localStorage
    loadFromLocalStorage() {
        try {
            const stored = localStorage.getItem('todos');
            if (stored) {
                const parsedTodos = JSON.parse(stored);
                // Convertir las fechas de string a Date
                this.todos = parsedTodos.map((todo) => (Object.assign(Object.assign({}, todo), { createdAt: new Date(todo.createdAt) })));
                // Actualizar el nextId basado en el máximo ID existente
                if (this.todos.length > 0) {
                    this.nextId = Math.max(...this.todos.map((t) => t.id)) + 1;
                }
                this.render();
            }
        }
        catch (error) {
            console.error('Error al cargar desde localStorage:', error);
        }
    }
    // Escapar HTML para prevenir XSS
    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
}
// Instancia global de la lista de tareas
const todoList = new TodoList();
// Función para manejar el envío del formulario
function handleAddTodo(event) {
    event.preventDefault();
    const input = document.getElementById('todo-input');
    if (input && input.value) {
        todoList.addTodo(input.value);
        input.value = '';
    }
}
// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    // Cargar tareas guardadas
    todoList.loadFromLocalStorage();
    // Configurar el formulario
    const form = document.getElementById('todo-form');
    if (form) {
        form.addEventListener('submit', handleAddTodo);
    }
    // Botón para limpiar todas las tareas completadas
    const clearCompletedBtn = document.getElementById('clear-completed');
    if (clearCompletedBtn) {
        clearCompletedBtn.addEventListener('click', () => {
            const completed = todoList.getCompletedTodos();
            completed.forEach(todo => todoList.removeTodo(todo.id));
        });
    }
});
