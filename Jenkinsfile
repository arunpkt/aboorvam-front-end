pipeline {
   agent {
        { label 'node:lts-buster-slim' }
    }

    stages {
        stage('Build') {
            steps {
                echo 'Building..'
                sh 'ng build'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}