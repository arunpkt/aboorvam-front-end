pipeline {
    agent {label 'agent1'}

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