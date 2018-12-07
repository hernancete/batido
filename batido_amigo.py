
import argparse
from datetime import datetime

now = datetime.now()

parser = argparse.ArgumentParser()

parser.add_argument("-e", "--event",
                    help="The event this batido is being made for",
                    choices=['navidad', 'reyes'],
                    required=True)
parser.add_argument("-p", "--players",
                    help="The players of the batido",
                    choices=['giayetto', 'frutos'],
                    required=True)
parser.add_argument("-y", "--year",
                    help="The year this batido will be played on",
                    default=now.year)
parser.add_argument("-t", "--test",
                    help="Whether this batido is a test or not",
                    action="store_true")

args = parser.parse_args()

# print args.event
# print args.players
# print args.year
# print args.test

# 1. get players from google
# 2. get players restrictions from google
# 3. hacer el batido
# 4. chequear que se cumplan las restricciones
# 5. si success: escribir los archivos con los resultados

