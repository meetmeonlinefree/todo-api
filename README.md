# To-Do List API

Тестовое задание (Junior PHP Developer)  
**Задача:** Разработка простого REST API для управления списком задач (To-Do List) на Laravel + MySQL

---

## 📋 Функциональность API

| Метод  | Endpoint           | Описание                      |
|--------|--------------------|-------------------------------|
| GET    | `/api/tasks`       | Получить список всех задач   |
| GET    | `/api/tasks/{id}`  | Получить одну задачу по id   |
| POST   | `/api/tasks`       | Создать новую задачу         |
| PUT    | `/api/tasks/{id}`  | Обновить задачу              |
| DELETE | `/api/tasks/{id}`  | Удалить задачу               |

### Поля задачи

- `title` *(string, required)* — название задачи  
- `description` *(string, optional)* — описание задачи  
- `status` *(enum: pending, in_progress, completed)* — статус задачи

---

## 🚀 Как запустить проект

### 1. Клонировать репозиторий

```bash
git clone https://github.com/meetmeonlinefree/todo-api.git
cd todo-api
