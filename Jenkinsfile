pipeline {
    agent any

    stages {
        
        stage('Checkout') {
            steps {
                git branch: 'main',
                    credentialsId: 'github-token',
                    url: 'https://github.com/ghaitzazahiraa/KSI2025.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                powershell '''
                    composer install
                '''
            }
        }
        
        stage('Run PHPUnit Tests') {
            steps {
                powershell '''
                    vendor/bin/phpunit --configuration phpunit.xml
                '''
            }
        }

        stage('Run PHP App') {
            steps {
                powershell '''
                    php index.php
                '''
            }
        }
    }
}
