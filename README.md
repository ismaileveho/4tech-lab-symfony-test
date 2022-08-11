# Symfony test PULS

During this test, you'll need to develop a minimal listing of vehicles based on the [design on adobe XD](https://xd.adobe.com/view/b65f84ac-efe6-4c0c-9593-cc996d93ea5b-e30c/).

You will need to use this github as a starter to match the design.

![Screenshot 2022-03-28 at 17 08 06](https://user-images.githubusercontent.com/34513693/160428961-cd2a1bfb-7ea7-4967-992f-41fa20047211.png)

### Vehicles data

A data fixture is ready to be loaded inside the Vehicles entity.

### Run the project

- Install dependencies: `composer install` + `yarn`
- Run Symfony: `php -S localhost:8000 -t public/` or using the symfony CLI
- Check it on http://localhost:8000 (port may change if already taken)

### Verification

You don't need to deploy your project for verification. You can push it in github or send us through a zip file. What is important for us is that we only need to use `php -S localhost:8000 -t public/` in order to see your work, nothing more.

### Rules and Evaluation
- You're allowed to use any external ressource
- You must use Controllers to send back and forth the filtering from the form (don't do it all in Javascript)
- We advice you to use TailwindCSS for the styling
- We advice you to use TWIG for the front

## Points
### Form
- Filter by brand (always keep the brand list untouched, it should reset if the user the form is the user is choosing a brand)
- Filter by price
- Filter by model
- Filter by energy
- Open/Close filters
- Price slider
### Listing of vehicles
- Display NB of vehicles (for the current query)
- Sort by : Price ASC/DESC
- Pagination
- Display first pic of vehicle (any pic you want if not pics available) and data based on the design.
- Always 12 vehicles per page

## Extra
### Form
- Filter by monthly price
- One checkbox (Zero km equal to <= 150 kilometes)
- Animation when opening / closing a filter
- Responsive
### Listing of vehicles
- Sort by : Brand-Model ASC/DESC
- Animation when hovering a vehicle
- Responsive

## BIG Extra
- Add the AD block at the 5th position of the cars listing (on each pagination)

<img width="384" alt="Screenshot 2022-03-29 at 16 21 58" src="https://user-images.githubusercontent.com/34513693/160633732-4b9dbc32-656b-473d-86a5-4f0b26bae908.png">
