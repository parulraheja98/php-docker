# UpStart

> Upfeat New Project Starter Kit

# Project Description

Toronto Raptors just beat Golden State Warrior in NBA grand final. To show your support to this only Canadian team in NBA, your will build a website for Raptors Players. Your website should have a page to list all players, a page to see one player detailed profiles. And your website should also be able add/remove players.

# Tech Stack and Requirments

### Backend

Framework: Lumen framework 5.8

- you can visit backend endpoint via `http://localhost:8088` directly from your browser.
- All your endpoints need to be prefixed with `api`, otherwise the frontend dev server won't be able to talk to backend. e.g. `/api/players`
- Use [controllers](https://lumen.laravel.com/docs/5.8/controllers) for all routes
- You need to use [Eloquent ORM](https://lumen.laravel.com/docs/5.8/database) for your database model

### Frontend

Vuejs 2.6

- Visit `http://localhost:8888` to open frontend app
- All api call need to have `/api` prefix
- Use `Vue Router` to do frontend routing
- Optional to use `Vuex` to manage frontend app state.
- Reasonablely breakdown your components
- Use `SCSS` for styling
- Pick a UI library you like to use e.g. Bootstrap, Tailwind CSS etc

### Database

Mysql 5.7

- You can connect to database directly via port 3306, see `docker-compose.yml` file for credentials.

# Get Started

- First of all, you will need to install docker on your computer
- run `docker-compose up -d` to start all services
- run `docker-compose exec backend composer install` to install backend dependencies, you only need to run this once first time.
- visit `http://localhost:8888` to see the UI

# Useful commands

- `docker-compose exec backend bash` get a bash shell from backend server
- `docker-compose exec frontend npm install [package]` install a npm package for frortend
- for more `docker-compose` usage, see the docker official documents.
