
import os
import argparse
from datetime import datetime
from random import sample
from db_api import get_players, get_players_last_results, get_player_names

MAX_ATTEMPTS = 500
OUT_DIRECTORY_TEMPL = "./batido_{players}_{event}_{year}/"
RESULT_TEXT_TEMPL = "batido_texto_{players}_{event}_{year}.txt"
RESULT_FILE_TEMPL = "{player}.txt"
RESULTS_FILE = "Resultados.txt"
RESULTS_HEADER_TEMPLATE = "results_header_template.txt"

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
                    help="The year this batido will be played on. Default is current year",
                    type=int,
                    default=now.year)
parser.add_argument("-r", "--restricted-years",
                    help="Results must be different from the last RESTRICTED_YEARS. Default is 2 years",
                    type=int,
                    default=2)
parser.add_argument("-t", "--test",
                    help="Whether this batido is a test or not",
                    action="store_true")

args = parser.parse_args()


def meet_restrictions(results, restrictions, restrict_myself=True):
  # print("meet_restrictions({}, {}, {})".format(results, restrictions, restrict_myself))
  for f in results:
    t = results[f]
    if restrict_myself and f == t:
      print("{} cannot give a present to himself/herself".format(f))
      return False
    if t in restrictions[f]:
      print("{} cannot give a present to {}".format(f, t))
      return False
  return True


def print_results(results):
  for r in results:
    print("{}\t->\t{}".format(str(player_names[r]), str(player_names[results[r]])))


def write_results(results, directory):
  with open(RESULTS_HEADER_TEMPLATE, 'r') as results_templ_h:
    results_template = results_templ_h.read()

    results_file = os.path.join(directory, RESULTS_FILE)
    with open(results_file, 'w') as results_file_h:
      results_file_h.write(results_template.format(players=args.players,
                                                   event=args.event,
                                                   year=args.year,
                                                   years_ago=args.restricted_years))
      template_name = RESULT_TEXT_TEMPL.format(players=args.players,
                                               event=args.event,
                                               year=args.year)
      with open(template_name, 'r') as templ:
        template = templ.read()

        for r in results:
          result_file = os.path.join(directory,
                                     RESULT_FILE_TEMPL.format(player=player_names[r]))
          print("Writting result for {} on {}".format(player_names[r], result_file))

          results_file_h.write("{} -> {}\n".format(player_names[r], player_names[results[r]]))

          with open(result_file, 'w') as result_file_h:
            result_file_h.write(template.format(player=player_names[r], amaigo=player_names[results[r]]))


if args.test:
  print("Esto es una prueba!")
else:
  print("Esto NO es una prueba!!! es de verdad!!")

# get players from google
players = get_players(args.players, args.event, args.year)

player_names = get_player_names(args.players, players)

# get players restrictions from google
last_results = get_players_last_results(args.players, args.event, args.year, args.restricted_years)

# hacer el batido
batido_amigo = {}
for i in range(1, MAX_ATTEMPTS):
  print("Attempt {}/{}".format(i, MAX_ATTEMPTS))
  batido = sample(players, len(players))
  results_candidate = {k:batido[i] for i,k in enumerate(players)}

  # chequear que se cumplan las restricciones
  if meet_restrictions(results_candidate, last_results):
    # si success: escribir los archivos con los resultados
    batido_amigo = results_candidate
    break

if batido_amigo:
  if args.test:
    print_results(batido_amigo)
  else:
    out_directory = OUT_DIRECTORY_TEMPL.format(players=args.players,
                                               event=args.event,
                                               year=args.year)
    if not os.path.exists(out_directory):
      os.mkdir(out_directory)

    print("Writting results on {}".format(out_directory))
    write_results(batido_amigo, out_directory)
