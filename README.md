# Recommend-Doctor

**Recommend-Doctor** is a web-based application that assists users in finding suitable doctors based on their symptoms. By leveraging machine learning techniques, the application predicts potential diseases from user-inputted symptoms and recommends doctors specializing in the relevant medical fields.

## Features

* **Symptom Analysis**: Input symptoms to receive potential disease predictions.
* **Doctor Recommendation**: Get suggestions for doctors specializing in the predicted diseases.
* **User-Friendly Interface**: Interact through a simple and intuitive web interface.
* **Machine Learning Integration**: Utilizes trained models for accurate predictions.

## Project Structure

```

Recommend-Doctor/
├── static/                 # Static files (CSS, JS, images)
├── templates/              # HTML templates
├── Training.csv            # Dataset for training the ML model
├── Testing.csv             # Dataset for testing the ML model
├── main.py                 # Main application script
├── index.py                # Script for handling routes and rendering templates
├── test.py                 # Script for testing the ML model
├── requirements.txt        # Python dependencies
├── Procfile                # Deployment configuration for Heroku
├── runtime.txt             # Specifies the Python runtime version
└── README.md               # Project documentation

```



## Installation

### Prerequisites

* Python 3.6 or higher
* pip (Python package installer)

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/Ashantfet/Recommend-Doctor.git
   cd Recommend-Doctor
   ```



2. **Create a Virtual Environment**

   ```bash
   python -m venv venv
   source venv/bin/activate  # On Windows: venv\Scripts\activate
   ```



3. **Install Dependencies**

   ```bash
   pip install -r requirements.txt
   ```



4. **Run the Application**

   ```bash
   python main.py
   ```



The application will start on `http://localhost:5000/`.

## Usage

1. **Access the Web Interface**

   Open your browser and navigate to `http://localhost:5000/`.

2. **Input Symptoms**

   Enter your symptoms into the provided input field.

3. **Receive Recommendations**

   The application will display predicted diseases along with recommended doctors specializing in those areas.

## Deployment

The application is configured for deployment on Heroku.

1. **Install the Heroku CLI**

   Follow the instructions at [Heroku Dev Center](https://devcenter.heroku.com/articles/heroku-cli) to install the Heroku CLI.

2. **Login to Heroku**

   ```bash
   heroku login
   ```



3. **Create a New Heroku App**

   ```bash
   heroku create your-app-name
   ```



4. **Deploy the Application**

   ```bash
   git push heroku main
   ```



5. **Open the Application**

   ```bash
   heroku open
   ```



## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

* Thanks to the contributors and the open-source community for their valuable resources and support.
