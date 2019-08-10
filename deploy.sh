#!/bin/bash
set -e
yes | eval $(docker run --rm -i -e AWS_ACCESS_KEY_ID -e AWS_SECRET_ACCESS_KEY quay.io/keboola/aws-cli ecr get-login --region us-east-1 --no-include-email)
docker tag keboola/orchestrator-cli:latest 061240556736.dkr.ecr.us-east-1.amazonaws.com/keboola/orchestrator-cli:$TRAVIS_TAG
docker tag keboola/orchestrator-cli:latest 061240556736.dkr.ecr.us-east-1.amazonaws.com/keboola/orchestrator-cli:latest
docker push 061240556736.dkr.ecr.us-east-1.amazonaws.com/keboola/orchestrator-cli:$TRAVIS_TAG
docker push 061240556736.dkr.ecr.us-east-1.amazonaws.com/keboola/orchestrator-cli:latest
