# nbp_app
Integration with the NBP api, which updates the exchange rates in the database.
1. AppController
- index @Route("/app", name="app")
  update the database (future command)
2. Services
- ApiService
  connection to NBP api
- DbService
  logic of entry into the database 
