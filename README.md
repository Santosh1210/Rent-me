import pygame
import random

# Initialize Pygame
pygame.init()

# Set the screen dimensions
SCREEN_WIDTH = 800
SCREEN_HEIGHT = 600

# Set colors
WHITE = (255, 255, 255)
RED = (255, 0, 0)
GREEN = (0, 255, 0)
BLACK = (0, 0, 0)

# Set snake and food sizes
BLOCK_SIZE = 20

# Set snake speed
SNAKE_SPEED = 10

# Create the screen
screen = pygame.display.set_mode((SCREEN_WIDTH, SCREEN_HEIGHT))
pygame.display.set_caption("Snake Game")

# Clock for controlling the game's frame rate
clock = pygame.time.Clock()

# Function to draw the snake
def draw_snake(snake_list):
    for block in snake_list:
        pygame.draw.rect(screen, GREEN, [block[0], block[1], BLOCK_SIZE, BLOCK_SIZE])

# Function to display messages
def display_message(msg, color, font_size):
    font = pygame.font.SysFont(None, font_size)
    screen_text = font.render(msg, True, color)
    screen.blit(screen_text, [SCREEN_WIDTH / 6, SCREEN_HEIGHT / 3])

# Main function for the game
def gameLoop():
    game_over = False
    game_close = False

    # Snake initial position and size
    snake_list = []
    snake_length = 1

    # Snake initial position
    x_snake = SCREEN_WIDTH / 2
    y_snake = SCREEN_HEIGHT / 2

    # Initial velocity
    x_change = 0
    y_change = 0

    # Food position
    food_x = round(random.randrange(0, SCREEN_WIDTH - BLOCK_SIZE) / BLOCK_SIZE) * BLOCK_SIZE
    food_y = round(random.randrange(0, SCREEN_HEIGHT - BLOCK_SIZE) / BLOCK_SIZE) * BLOCK_SIZE

    while not game_over:
        while game_close == True:
            screen.fill(WHITE)
            display_message("Game Over! Press Q-Quit or C-Play Again", RED, 50)
            pygame.display.update()

            for event in pygame.event.get():
                if event.type == pygame.KEYDOWN:
                    if event.key == pygame.K_q:
                        game_over = True
                        game_close = False
                    if event.key == pygame.K_c:
                        gameLoop()

        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                game_over = True
            if event.type == pygame.KEYDOWN:
                if event.key == pygame.K_LEFT:
                    x_change = -BLOCK_SIZE
                    y_change = 0
                elif event.key == pygame.K_RIGHT:
                    x_change = BLOCK_SIZE
                    y_change = 0
                elif event.key == pygame.K_UP:
                    y_change = -BLOCK_SIZE
                    x_change = 0
                elif event.key == pygame.K_DOWN:
                    y_change = BLOCK_SIZE
                    x_change = 0

        # Boundaries check
        if x_snake >= SCREEN_WIDTH or x_snake < 0 or y_snake >= SCREEN_HEIGHT or y_snake < 0:
            game_close = True

        x_snake += x_change
        y_snake += y_change
        screen.fill(WHITE)
        pygame.draw.rect(screen, RED, [food_x, food_y, BLOCK_SIZE, BLOCK_SIZE])

        snake_head = []
        snake_head.append(x_snake)
        snake_head.append(y_snake)
        snake_list.append(snake_head)
        if len(snake_list) > snake_length:
            del snake_list[0]

        for segment in snake_list[:-1]:
            if segment == snake_head:
                game_close = True

        draw_snake(snake_list)
        pygame.display.update()

        if x_snake == food_x and y_snake == food_y:
            food_x = round(random.randrange(0, SCREEN_WIDTH - BLOCK_SIZE) / BLOCK_SIZE) * BLOCK_SIZE
            food_y = round(random.randrange(0, SCREEN_HEIGHT - BLOCK_SIZE) / BLOCK_SIZE) * BLOCK_SIZE
            snake_length += 1

        clock.tick(SNAKE_SPEED)

    pygame.quit()
    quit()

gameLoop()
