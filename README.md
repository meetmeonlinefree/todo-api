# To-Do List API

Тестовое задание (Junior PHP Developer)  
**Задача:** Разработка простого REST API для управления списком задач (To-Do List) на Laravel + MySQL

---

## 📋 Функциональность API

| Метод  | Endpoint           | Описание                      |
|--------|--------------------|-------------------------------|
| GET    | `http://127.0.0.1:8000/api/tasks`       | Получить список всех задач   |
| GET    | `http://127.0.0.1:8000/api/tasks/{id}`  | Получить одну задачу по id   |
| POST   | `http://127.0.0.1:8000/api/tasks`       | Создать новую задачу         |
| PUT    | `http://127.0.0.1:8000/api/tasks/{id}`  | Обновить задачу              |
| DELETE | `http://127.0.0.1:8000/api/tasks/{id}`  | Удалить задачу               |


---

## 🚀 Как запустить проект

### 1. Клонировать репозиторий

```bash
git clone https://github.com/meetmeonlinefree/todo-api.git
cd todo-api
composer install
php artisan migrate
php artisan serve

-- база данных -  todo-api.sql --
