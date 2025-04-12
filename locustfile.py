from locust import HttpUser, task, between
class WebsiteUser(HttpUser):
    wait_time = between(1, 3)
    host = "http://localhost:8080"
    @task
    def index(self):
        self.client.get("/")
