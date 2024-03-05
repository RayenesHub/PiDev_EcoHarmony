<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_quiz')]
    public function index(Request $request): Response
    { $questions = $this->getQuizQuestions();
        $questions = [
            [
                'text' => 'Quel est votre niveau d\'expérience en jardinage ?',
                'responses' => [
                    ['text' => 'Débutant', 'score' => ['Facile d\'Entretien' => 1]],
                    ['text' => 'Intermédiaire', 'score' => ['Potager' => 1, 'Ornemental' => 1]],
                    ['text' => 'Avancé', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Combien de temps pouvez-vous consacrer à l\'entretien de votre jardin chaque semaine ?',
                'responses' => [
                    ['text' => 'Moins d\'une heure', 'score' => ['Facile d\'Entretien' => 2]],
                    ['text' => '1-3 heures', 'score' => ['Potager' => 2, 'Ornemental' => 1]],
                    ['text' => 'Plus de 3 heures', 'score' => ['Écologique' => 2, 'Ornemental' => 2]],
                ],
            ],
            [
                'text' => 'Préférez-vous les plantes qui nécessitent peu d\'attention ou celles qui demandent plus de soins ?',
                'responses' => [
                    ['text' => 'Peu d\'attention', 'score' => ['Facile d\'Entretien' => 2]],
                    ['text' => 'Plus de soins', 'score' => ['Ornemental' => 2, 'Écologique' => 1]],
                ],
            ],
            [
                'text' => 'Quelle est la taille de votre jardin ou de l\'espace que vous souhaitez aménager ?',
                'responses' => [
                    ['text' => 'Petit balcon ou terrasse', 'score' => ['Facile d\'Entretien' => 2]],
                    ['text' => 'Jardin de taille moyenne', 'score' => ['Potager' => 1, 'Ornemental' => 2]],
                    ['text' => 'Grand espace extérieur', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Quel est le climat de votre région ?',
                'responses' => [
                    ['text' => 'Plutôt froid', 'score' => ['Facile d\'Entretien' => 1]],
                    ['text' => 'Tempéré', 'score' => ['Potager' => 1, 'Ornemental' => 1]],
                    ['text' => 'Chaud ou tropical', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Quel type de plantes préférez-vous ?',
                'responses' => [
                    ['text' => 'Plantes d\'intérieur et fleurs', 'score' => ['Ornemental' => 2]],
                    ['text' => 'Légumes et herbes aromatiques', 'score' => ['Potager' => 2]],
                    ['text' => 'Plantes autochtones et résistantes à la sécheresse', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Quelle importance accordez-vous à la biodiversité et aux pratiques de jardinage durable ?',
                'responses' => [
                    ['text' => 'Pas très important', 'score' => ['Facile d\'Entretien' => 1]],
                    ['text' => 'Assez important', 'score' => ['Ornemental' => 1]],
                    ['text' => 'Très important', 'score' => ['Écologique' => 2]],
                ],
            ],
           
            
        ];

        // Initialisation des scores pour chaque type de jardin
        $scores = ['Facile d\'Entretien' => 0, 'Potager' => 0, 'Ornemental' => 0, 'Écologique' => 0];

        if ($request->isMethod('POST')) {
            // Récupérer les données soumises
            $responseData = $request->request->all();

            // Calculer les scores en fonction des réponses
            foreach ($questions as $qIndex => $question) {
                $responseKey = 'question' . ($qIndex + 1);
                if (isset($responseData[$responseKey])) {
                    // Convertir la réponse en entier et ajuster pour l'indexation basée sur zéro
                    $responseIndex = intval($responseData[$responseKey]) - 1;
                    // Vérifiez que l'index de réponse est valide
                    if ($responseIndex >= 0 && $responseIndex < count($question['responses'])) {
                        $selectedResponse = $question['responses'][$responseIndex];
                        foreach ($selectedResponse['score'] as $gardenType => $increment) {
                            // Vérifiez que le type de jardin est défini dans les scores et incrémentez le score
                            if (isset($scores[$gardenType])) {
                                $scores[$gardenType] += $increment;
                            }
                        }
                    }
                }
            }

            // Déterminer le type de jardin avec le score le plus élevé
            $recommendedGarden = array_search(max($scores), $scores);
        } else {
            // Aucune soumission, donc pas de jardin recommandé
            $recommendedGarden = null;
        }

        // Passer les questions et le jardin recommandé à la vue
        return $this->render('quiz/index.html.twig', [
            'questions' => $this->getQuizQuestions(),
            'recommendedGarden' => $recommendedGarden,
        ]);
    }


    private function getQuizQuestions(): array
    {
        // Retourne le tableau des questions de votre quiz
        return [
            [
                'text' => 'Quel est votre niveau d\'expérience en jardinage ?',
                'responses' => [
                    ['text' => 'Débutant', 'score' => ['Facile d\'Entretien' => 1]],
                    ['text' => 'Intermédiaire', 'score' => ['Potager' => 1, 'Ornemental' => 1]],
                    ['text' => 'Avancé', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Combien de temps pouvez-vous consacrer à l\'entretien de votre jardin chaque semaine ?',
                'responses' => [
                    ['text' => 'Moins d\'une heure', 'score' => ['Facile d\'Entretien' => 2]],
                    ['text' => '1-3 heures', 'score' => ['Potager' => 2, 'Ornemental' => 1]],
                    ['text' => 'Plus de 3 heures', 'score' => ['Écologique' => 2, 'Ornemental' => 2]],
                ],
            ],
            [
                'text' => 'Préférez-vous les plantes qui nécessitent peu d\'attention ou celles qui demandent plus de soins ?',
                'responses' => [
                    ['text' => 'Peu d\'attention', 'score' => ['Facile d\'Entretien' => 2]],
                    ['text' => 'Plus de soins', 'score' => ['Ornemental' => 2, 'Écologique' => 1]],
                ],
            ],
            [
                'text' => 'Quelle est la taille de votre jardin ou de l\'espace que vous souhaitez aménager ?',
                'responses' => [
                    ['text' => 'Petit balcon ou terrasse', 'score' => ['Facile d\'Entretien' => 2]],
                    ['text' => 'Jardin de taille moyenne', 'score' => ['Potager' => 1, 'Ornemental' => 2]],
                    ['text' => 'Grand espace extérieur', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Quel est le climat de votre région ?',
                'responses' => [
                    ['text' => 'Plutôt froid', 'score' => ['Facile d\'Entretien' => 1]],
                    ['text' => 'Tempéré', 'score' => ['Potager' => 1, 'Ornemental' => 1]],
                    ['text' => 'Chaud ou tropical', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Quel type de plantes préférez-vous ?',
                'responses' => [
                    ['text' => 'Plantes d\'intérieur et fleurs', 'score' => ['Ornemental' => 2]],
                    ['text' => 'Légumes et herbes aromatiques', 'score' => ['Potager' => 2]],
                    ['text' => 'Plantes autochtones et résistantes à la sécheresse', 'score' => ['Écologique' => 2]],
                ],
            ],
            [
                'text' => 'Quelle importance accordez-vous à la biodiversité et aux pratiques de jardinage durable ?',
                'responses' => [
                    ['text' => 'Pas très important', 'score' => ['Facile d\'Entretien' => 1]],
                    ['text' => 'Assez important', 'score' => ['Ornemental' => 1]],
                    ['text' => 'Très important', 'score' => ['Écologique' => 2]],
                ],
            ],
           
        ];
    }
    #[Route('/quiz/result', name: 'app_quiz_result', methods: ['POST'])]
    public function result(Request $request): Response
    { $questions = $this->getQuizQuestions();
        // Récupérer les données soumises du quiz
        $responseData = $request->request->all();

        // Initialisation des scores pour chaque type de jardin
        $scores = ['Facile d\'Entretien' => 0, 'Potager' => 0, 'Ornemental' => 0, 'Écologique' => 0];

        // Logique de calcul des scores basée sur les réponses soumises
        $questions = $this->getQuizQuestions(); // Assurez-vous d'avoir cette méthode ou ajustez selon votre code
        foreach ($questions as $qIndex => $question) {
            $responseKey = 'question' . ($qIndex + 1);
            if (isset($responseData[$responseKey])) {
                $responseIndex = intval($responseData[$responseKey]) - 1;
                if ($responseIndex >= 0 && $responseIndex < count($question['responses'])) {
                    $selectedResponse = $question['responses'][$responseIndex];
                    foreach ($selectedResponse['score'] as $gardenType => $increment) {
                        if (isset($scores[$gardenType])) {
                            $scores[$gardenType] += $increment;
                        }
                    }
                }
            }
        }

        // Déterminer le type de jardin avec le score le plus élevé
        $recommendedGarden = array_search(max($scores), $scores);

        // Renvoyer la vue du résultat avec le jardin recommandé
        return $this->render('quiz/result.html.twig', [
            'recommendedGarden' => $recommendedGarden,
        ]);
    }
    private function initializeScores(): array
    {
        // Initialiser et retourner les scores de départ pour chaque type de jardin
        return ['Facile d\'Entretien' => 0, 'Potager' => 0, 'Ornemental' => 0, 'Écologique' => 0];
    }

  
    
}